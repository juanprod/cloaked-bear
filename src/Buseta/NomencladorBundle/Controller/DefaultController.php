<?php

namespace Buseta\NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BusetaNomencladorBundle:Default:index.html.twig', array());
    }
}
