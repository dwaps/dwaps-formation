<?php

namespace DWAPS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DWAPS\ModelBundle\Entity\DwapsTuto;
use DWAPS\ModelBundle\Entity\DwapsTutoContent;
use DWAPS\ModelBundle\Entity\DwapsImage;
use DWAPS\ModelBundle\Form\DwapsTutoType;
use DWAPS\ModelBundle\Form\DwapsTutoContentType;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render( 'DWAPSAdminBundle:Main:index.html.twig' );
    }

    public function addTutoAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();

        $tuto = new DwapsTuto();
        $image = new DwapsImage();
        $tuto->setImage( $image );

    	$form = $this->createForm( DwapsTutoType::class, $tuto );

    	$form->handleRequest( $request );

    	if( $form->isSubmitted() && $form->isValid() )
    	{
    		$em->persist( $tuto );
    		$em->flush();

            $id = $em
                ->getRepository( 'DWAPSModelBundle:DwapsTuto' )
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

        $tutorials = $em->getRepository( "DWAPSModelBundle:DwapsTuto" )->findAll();

    	return $this->render( 'DWAPSAdminBundle:Main:add_tuto.html.twig', array(
    		'form_add_tuto' => $form->createView(),
            'tutorials' => $tutorials
    	));
    }

    public function addTutoContentAction( Request $request, $id )
    {
        $em = $this->getDoctrine()->getManager();

        $tutoContent = new DwapsTutoContent();
        $tuto = $em->getRepository( 'DWAPSModelBundle:DwapsTuto' )->find( $id );
        $tutoContent->setTuto( $tuto );

        $form = $this->createForm( DwapsTutoContentType::class, $tutoContent );

        $form->handleRequest( $request );

        if( $form->isSubmitted() && $form->isValid() )
        {
            $em->persist( $tutoContent );
            $em->flush();

            if( !$tutoContent->getNotLast() )
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
            ->getRepository( 'DWAPSModelBundle:DwapsTutoContent' )
            ->findBy( array(
                "tuto" => $tuto
            ))
        ;

        return $this->render( 'DWAPSAdminBundle:Main:add_tuto_content.html.twig', array(
            "form_add_tuto_content" => $form->createView(),
            "tutoContents" => $tutoContents,
            "tuto" => $tuto
        ));
    }


    public function updateTutoContentAction( Request $request, $idTuto, $idContent )
    {
        // $em = $this->getDoctrine()->getManager();
        // $tutoContent = $em
        //     ->getRepository( 'DWAPSModelBundle:DwapsTutoContent' )
        //     ->find( $idContent )
        // ;

        // $em->remove( $tutoContent );
        // $em->flush();

        // $request
        //     ->getSession()
        //     ->getFlashBag()
        //     ->add( "remove_tuto_content", "Le chapitre " . $tutoContent->getChapter() . " a bien été supprimé !" )
        // ;

        // return $this->redirectToRoute( 'dwaps_admin_add_tuto_content', array(
        //     "id" => $idTuto
        // ));

        return $this->redirectToRoute( 'dwaps_admin_add_tuto_content', array(
            "id" => $idTuto
        ));
    }


    public function removeTutoContentAction( Request $request, $idTuto, $idContent )
    {
        $em = $this->getDoctrine()->getManager();
        $tutoContent = $em
            ->getRepository( 'DWAPSModelBundle:DwapsTutoContent' )
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
        $tuto = $em->getRepository( 'DWAPSModelBundle:DwapsTuto' )->find( $id );

        $em->remove( $tuto );
        $em->flush();

        $request
            ->getSession()
            ->getFlashBag()
            ->add( "remove_tuto", "Le tutoriel " . $tuto->getTitle() . " a bien été supprimé !" )
        ;

        return $this->redirectToRoute( 'dwaps_admin_add_tuto' );
    }
}
