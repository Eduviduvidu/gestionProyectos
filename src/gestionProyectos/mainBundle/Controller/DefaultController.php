<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gestionProyectosmainBundle:Default:index.html.twig');
    }
}
