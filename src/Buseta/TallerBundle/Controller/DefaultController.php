<?php

namespace Buseta\TallerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BusetaTallerBundle:Default:index.html.twig', array('name' => $name));
    }
}
