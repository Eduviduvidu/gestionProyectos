<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestionProyectos\mainBundle\Form\UsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;

class FormUsuarioController extends Controller {

    public function createUsuarioAction() {
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);
        return $this->render('gestionProyectosmainBundle:Form:formUsuario.html.twig', array('title' => 'Crear usuario', 'form' => $form->createView()));
    }

}
