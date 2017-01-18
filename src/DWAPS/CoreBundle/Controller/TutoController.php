<?php

namespace DWAPS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use DWAPS\ModelBundle\Entity\DwapsTuto;
use DWAPS\ModelBundle\Entity\DwapsTutoContent;

class TutoController extends Controller
{
	private $numNav = 1;

    public function tutorialsAction()
    {
    	// $this->denyAccessUnlessGranted( 'ROLE_ADMIN' );
    	
    	$em = $this->getDoctrine()->getManager();

    	$tutorials = $em->getRepository( "DWAPSModelBundle:DwapsTuto" )->findAll();

        return $this->render('DWAPSCoreBundle:Tuto:tutorials.html.twig', array(
            'ongletActif' => $this->numNav,
            'tutorials' => $tutorials
        ));
    }

    public function tutorialAction( Request $request, $id )
    {
    	$em = $this->getDoctrine()->getManager();

    	$tuto = $em->getRepository( "DWAPSModelBundle:DwapsTuto" )->find( $id );

    	if( null == $tuto )
    	{
    		$request->getSession()->getFlashBag()->add( 'no_tuto', 'Désolé, le tutoriel demandé n\'existe pas !' );
    		return $this->redirectToRoute( "dwaps_core_tutorials" );
    	}

        return $this->render('DWAPSCoreBundle:Tuto:tutorial.html.twig', array(
            'ongletActif' => $this->numNav,
            'tuto' => $tuto
        ));
    }

    public function paginationAction()
    {
        return $this->render( "DWAPSCoreBundle:Tuto:pagination.html.twig" );
    }

}
