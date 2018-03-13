<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestionProyectos\mainBundle\Form\LoginUsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;

class FormLoginUsuarioController extends Controller {

    public function LoginUsuarioAction() {
        $usuario = new Usuario();
        $form = $this->createForm(LoginUsuarioType::class, $usuario);
        return $this->render('gestionProyectosmainBundle:Form:loginUsuario.html.twig', array('title' => 'Login', 'form' => $form->createView()));
    }

}
