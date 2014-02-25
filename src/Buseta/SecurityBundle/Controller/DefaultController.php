<?php

namespace Buseta\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BusetaSecurityBundle:Default:index.html.twig', array('name' => $name));
    }
}
