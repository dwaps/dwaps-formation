<?php

namespace DWAPS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DWAPS\CoreBundle\Entity\DwapsNav;

class AdminController extends Controller
{
    public function navAction( Request $request )
    {
    	$form_add_menu = $this->createFormBuilder()
    		->add( 'NomDuMenu', TextType::class )
    		->add( 'LienDuMenu', TextType::class )
    		->add( 'Image', TextType::class )
    		->add( 'MenuParent', TextType::class )
    		->add( 'MenusEnfants', TextType::class )
    		->add( 'Envoyer', SubmitType::class )
    		->getForm()
    	;

    	$form_add_menu->handleRequest( $request );

    	if( $form_add_menu->isValid() )
    	{
    		$data = $form_add_menu->getData();

    		$nav = new DwapsNav();
    		$nav->setName( $data['NomDuMenu'] );
    		$nav->setLink( $data['LienDuMenu'] );
    		$nav->setImage( $data['Image'] );
    		$nav->setParent( $data['MenuParent'] );
    		$nav->setChildren( $data['MenusEnfants'] );

    		$em = $this->getDoctrine()->getManager();
    		$em->persist( $nav );
    		$em->flush();

    		$request->getSession()->getFlashBag()->add( 'form_ok', 'Le menu a bien été enregistré' );

    		return $this->redirectToRoute( 'dwaps_core_home', array(
    			'first_start' => 'accueil'
    		));
    	}

        return $this->render('DWAPSCoreBundle:Admin:nav.html.twig', array(
            'form_add_menu' => $form_add_menu->createView()
        ));
    }

}
