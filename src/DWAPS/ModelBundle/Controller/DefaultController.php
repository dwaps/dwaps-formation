<?php

namespace DWAPS\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DWAPSModelBundle:Default:index.html.twig');
    }
}
