<?php

namespace WC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCPlatformBundle:Default:index.html.twig');
    }
}
