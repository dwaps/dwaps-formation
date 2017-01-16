<?php

namespace DWAPS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use DWAPS\CoreBundle\Entity\DwapsTuto;
use DWAPS\CoreBundle\Entity\DwapsTutoContent;
use DWAPS\CoreBundle\Entity\DwapsImage;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render( 'DWAPSAdminBundle:Main:index.html.twig' );
    }

    public function addTutoAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();

    	$form = $this->createFormBuilder()
    		->add( 'title', TextType::class, array(
                "label" => "Titre du tutoriel : "
            ))
    		->add( 'description', TextareaType::class, array(
                "label" => "Résumé du tutoriel : "
            ))
    		->add( 'category', ChoiceType::class, array(
    			'choices' => array(
    				'CSS' => 'CSS',
    				'Server' => 'Server',
    				'HTML' => 'HTML',
    				'JavaScript' => 'JavaScript',
    				'SVG' => 'SVG'
    			)
    		))
    		->add( 'imageUrl', TextType::class, array(
                "label" => "Nom de l'image : "
            ))
    		->add( 'Go', SubmitType::class )
    		->getForm()
    	;

    	$form->handleRequest( $request );

    	if( $form->isSubmitted() && $form->isValid() )
    	{
    		$data = $form->getData();

    		$tuto = new DwapsTuto();
    		$tuto->setTitle( $data['title'] );
    		$tuto->setDescription( $data['description'] );
    		$tuto->setCategory( $data['category'] );
    		$tuto->setDate( new \Datetime );

    		$image = new DwapsImage();
    		$image->setUrl( $data['imageUrl'] );
    		$image->setAlt( $data['imageUrl'] );

    		$tuto->setImage( $image );

    		$em->persist( $tuto );
    		$em->flush();

            $id = $em
                ->getRepository( 'DWAPSCoreBundle:DwapsTuto' )
                ->findBy(
                    array(
                        "title" => $tuto->getTitle()
                    )
                )[0]
                ->getId();

    		return $this->redirectToRoute( "dwaps_admin_add_tuto_content", array(
                "id" => $id
            ));
    	}

        $tutorials = $em->getRepository( "DWAPSCoreBundle:DwapsTuto" )->findAll();

    	return $this->render( 'DWAPSAdminBundle:Main:add_tuto.html.twig', array(
    		'form_add_tuto' => $form->createView(),
            'tutorials' => $tutorials
    	));
    }

    public function addTutoContentAction( Request $request, $id )
    {
        $em = $this->getDoctrine()->getManager();
        $tuto = $em->getRepository( 'DWAPSCoreBundle:DwapsTuto' )->find( $id );

        $form = $this->createFormBuilder()
            ->add( 'chapter', TextType::class, array(
                "label" => "Titre du chapitre : "
            ))
            ->add( 'paragraph', TextareaType::class, array(
                "label" => "Contenu du chapitre : "
            ))
            ->add( 'new', CheckboxType::class, array(
                "label" => "Ajouter un chapitre après celui-ci ?",
                "required" => false
            ))
            ->add( 'Go', SubmitType::class )
            ->getForm()
        ;

        $form->handleRequest( $request );

        if( $form->isSubmitted() && $form->isValid() )
        {
            $data = $form->getData();
        
            $tutoContent = new DwapsTutoContent();
            $tutoContent->setChapter( $data['chapter'] );
            $tutoContent->setParagraph( $data['paragraph'] );

            $tutoContent->setTuto( $tuto );

            $em->persist( $tutoContent );
            $em->flush();

            if( !$data['new'] )
            {
                if( null == $request
                    ->getSession()
                    ->getFlashBag()
                    ->get( "update_tuto" ) )
                {
                    $request
                        ->getSession()
                        ->getFlashBag()
                        ->add( "add_tuto", "Le tutoriel " . $tuto->getTitle() . " a bien été ajouté !" )
                    ;
                }

                return $this->redirectToRoute( 'dwaps_admin_home' );
            }
        }

        $tutoContents = $em
            ->getRepository( 'DWAPSCoreBundle:DwapsTutoContent' )
            ->findBy( array(
                "tuto" => $tuto
            ))
        ;

        return $this->render( 'DWAPSAdminBundle:Main:add_tuto_content.html.twig', array(
            "form_add_tuto_content" => $form->createView(),
            "tutoContents" => $tutoContents,
            "idTuto" => $id
        ));
    }

    public function removeTutoContentAction( Request $request, $idTuto, $idContent )
    {
        $em = $this->getDoctrine()->getManager();
        $tutoContent = $em
            ->getRepository( 'DWAPSCoreBundle:DwapsTutoContent' )
            ->find( $idContent )
        ;

        $em->remove( $tutoContent );
        $em->flush();

        $request
            ->getSession()
            ->getFlashBag()
            ->add( "remove_tuto_content", "Le chapitre " . $tutoContent->getChapter() . " a bien été supprimé !" )
        ;

        return $this->redirectToRoute( 'dwaps_admin_add_tuto_content', array(
            "id" => $idTuto
        ));
    }

    public function updateTutoAction( Request $request, $id )
    {
        $request
            ->getSession()
            ->getFlashBag()
            ->add( "update_tuto", "Le tutoriel " . $tuto->getTitle() . " a bien été mis à jour !" )
        ;

        return $this->redirectToRoute( 'dwaps_admin_add_tuto_content', array(
            "id" => $id
        ));
    }

    public function removeTutoAction( Request $request, $id )
    {
        $em = $this->getDoctrine()->getManager();
        $tuto = $em->getRepository( 'DWAPSCoreBundle:DwapsTuto' )->find( $id );

        $em->remove( $tuto );
        $em->flush();

        $request
            ->getSession()
            ->getFlashBag()
            ->add( "remove_tuto", "Le tutoriel " . $tuto->getTitle() . " a bien été supprimé !" )
        ;

        return $this->redirectToRoute( 'dwaps_admin_home' );
    }
}
