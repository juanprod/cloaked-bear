<?php

namespace Buseta\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Default:index.html.twig', array());
    }

    /**
     * Module Configuration System.
     *
     */
    public function principalAction()
    {
        return $this->render('CoreBundle:Default:principal.html.twig');
    }
}
