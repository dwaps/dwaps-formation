<?php

namespace DWAPS\MailsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminMailsController extends Controller
{
    public function contactAction()
    {
        $template = $this->renderView( 'dwaps_mails_contact' );

        mail("contact@dwaps.fr", "Prise de contact", $template );

        $request->getSession()->getFlashBag()->add( 'notif_send_mail', 'Votre mail a bien été envoyé !' );

        return $this->redirectToRoute( 'dwaps_core_home' );
    }

    public function listeFormationsAction()
    {
        $template = $this->renderView( 'dwaps_mails_liste_formations' );

        mail("contact@dwaps.fr", "DWAPS Formation : Découvrez les formations proposées", $template );

        $request->getSession()->getFlashBag()->add( 'notif_send_mail', 'Votre mail a bien été envoyé !' );

        return $this->redirectToRoute( 'dwaps_core_home' );
    }

    public function confirmContactAction()
    {
        $template = $this->renderView( 'dwaps_mails_confirm_contact' );

        mail("contact@dwaps.fr", "Confirmation de prise de contact", $template );

        $request->getSession()->getFlashBag()->add( 'notif_send_mail', 'Votre mail a bien été envoyé !' );

        return $this->redirectToRoute( 'dwaps_core_home' );
    }

}
