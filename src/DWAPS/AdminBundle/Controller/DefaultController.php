<?php

namespace DWAPS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DWAPSAdminBundle:Default:index.html.twig');
    }
}
