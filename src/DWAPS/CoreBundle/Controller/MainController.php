<?php

namespace DWAPS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use DWAPS\CoreBundle\Entity\DwapsNav;

class MainController extends Controller
{
    public function indexAction( Request $request, $first_start )
    {
        return $this->render('DWAPSCoreBundle:Main:index.html.twig', array(
            'first_start' => $first_start
        ));
    }

    public function menuAction( $first_start, $onglet_actif )
    {

        $idMainDiv = ($first_start == "accueil") ? "menu" : "splashscreen";

        $nav = [];

        $names = [
            "Accueil",
            "Tutoriels",
            "Formations",
            "Portfolio",
            "Contact"
        ];

        $links = [
            "dwaps_core_home",
            "dwaps_core_tuto",
            "dwaps_core_formations",
            "dwaps_core_portfolio",
            "dwaps_core_contact"
        ];

        for ($i = 0; $i < count( $names ); $i++) { 
            array_push( $nav, new DwapsNav() );

            $nav[$i]->setName( $names[$i] );
            $nav[$i]->setLink( $links[$i] );

            if( $i == $onglet_actif )
                $nav[$i]->setActive( "active" );
            else
                $nav[$i]->setActive( "inactive" );

            // $nav[$i]->setImage( "" );
            // $nav[$i]->setParent( "" );
            // $nav[$i]->setChildren( "" );
        }

        return $this->render( 'DWAPSCoreBundle:Main:menu.html.twig', array(
            'idMainDiv' => $idMainDiv,
            'nav' => $nav
        ));
    }


// FONCTIONS ONGLETS MAIN MENU
    public function tutoAction( Request $request, $id )
    {
        return $this->render('DWAPSCoreBundle:Main:tuto.html.twig', array(
            'ongletActif' => 1,
            'id' => $id
        ));
    }

    public function formationsAction( Request $request )
    {
        return $this->render('DWAPSCoreBundle:Main:formations.html.twig', array(
            'ongletActif' => 2
        ));
    }

    public function portfolioAction( Request $request )
    {
        return $this->render('DWAPSCoreBundle:Main:portfolio.html.twig', array(
            'ongletActif' => 3
        ));
    }

    public function contactAction( Request $request )
    {
        return $this->render('DWAPSCoreBundle:Main:contact.html.twig', array(
            'ongletActif' => 4
        ));
    }
// FIN FONCTIONS ONGLETS MAIN MENU


    public function testAction( Request $request )
    {
    	$session = $request->getSession();

        return $this->render('DWAPSCoreBundle:Main:test.html.twig', array(
            'test' => $session->get( 'test' )
        ));
    }
}
