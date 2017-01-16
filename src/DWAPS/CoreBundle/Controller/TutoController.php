<?php

namespace DWAPS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use DWAPS\CoreBundle\Entity\DwapsTuto;
use DWAPS\CoreBundle\Entity\DwapsTutoContent;

class TutoController extends Controller
{
	private $numNav = 1;

    public function tutorialsAction()
    {
    	// $this->denyAccessUnlessGranted( 'ROLE_ADMIN' );
    	
    	$em = $this->getDoctrine()->getManager();

    	$tutorials = $em->getRepository( "DWAPSCoreBundle:DwapsTuto" )->findAll();

        return $this->render('DWAPSCoreBundle:Tuto:tutorials.html.twig', array(
            'ongletActif' => $this->numNav,
            'tutorials' => $tutorials
        ));
    }

    public function tutorialAction( Request $request, $id )
    {
    	$em = $this->getDoctrine()->getManager();

    	$tuto = $em->getRepository( "DWAPSCoreBundle:DwapsTuto" )->find( $id );

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

}
