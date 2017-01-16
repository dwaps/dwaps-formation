<?php

namespace DWAPS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use DWAPS\CoreBundle\Entity\DwapsTuto;
use DWAPS\CoreBundle\Entity\DwapsImage;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render( 'DWAPSAdminBundle:Main:index.html.twig' );
    }

    public function addTutoAction( Request $request )
    {
    	$form = $this->createFormBuilder()
    		->add( 'Titre', TextType::class )
    		->add( 'Description', TextareaType::class )
    		->add( 'Categorie', ChoiceType::class, array(
    			'choices' => array(
    				'CSS' => 'CSS',
    				'Server' => 'Server',
    				'HTML' => 'HTML',
    				'JavaScript' => 'JavaScript',
    				'SVG' => 'SVG'
    			)
    		))
    		->add( 'ImageUrl', TextType::class )
    		->add( 'ImageAlt', TextType::class )
    		->add( 'Go', SubmitType::class )
    		->getForm()
    	;

    	$form->handleRequest( $request );

    	if( $form->isSubmitted() && $form->isValid() )
    	{
    		$data = $form->getData();

    		$tuto = new DwapsTuto();
    		$tuto->setTitle( $data['Titre'] );
    		$tuto->setDescription( $data['Description'] );
    		$tuto->setCategory( $data['Categorie'] );
    		$tuto->setDate( new \Datetime );

    		$image = new DwapsImage();
    		$image->setUrl( $data['ImageUrl'] );
    		$image->setAlt( $data['ImageAlt'] );

    		$tuto->setImage( $image );

    		$em = $this->getDoctrine()->getManager();
    		$em->persist( $tuto );
    		$em->flush();

    		$request->getSession()->getFlashBag()->add( 'added_tuto', 'Le tutoriel a bien été ajouté !' );

    		return $this->redirectToRoute( "dwaps_admin_home" );
    	}

    	// DATE

    	return $this->render( 'DWAPSAdminBundle:Main:add_tuto.html.twig', array(
    		'form_add_tuto' => $form->createView()
    	));
    }
}
