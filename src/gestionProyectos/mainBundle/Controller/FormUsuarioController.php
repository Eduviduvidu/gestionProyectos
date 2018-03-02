<?php

namespace gestionProyectos\mainBundle\Controller;

use gestionProyectos\mainBundle\Form\UsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormUsuarioController extends Controller {

    public function createUsuarioAction() {
        $titol = "Creación de usuario";
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);
        return $this->render('gestionProyectosmainBundle:Form:formUsuario.html.twig', array('titol' => $titol, 'form' => $form->createView()));
        //return $this->render('gestionProyectosmainBundle:Default:formUsuario.html.twig');
    }

}
