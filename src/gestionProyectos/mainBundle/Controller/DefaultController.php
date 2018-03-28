<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        $usuario = $session->get('usuario');
        return $this->render('gestionProyectosmainBundle:Default:index.html.twig', array("title" => "Inicio", "usuario" => $usuario));
    }

}
