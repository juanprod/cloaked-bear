<?php

namespace Buseta\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BusetaTemplateBundle:Default:index.html.twig', array('name' => $name));
    }
}
