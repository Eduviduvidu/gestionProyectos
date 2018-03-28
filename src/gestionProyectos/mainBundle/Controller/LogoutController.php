<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LogoutController extends Controller {

    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->remove('usuario');
        return $this->redirectToRoute("gestion_proyectosmain_homepage");
    }

}
