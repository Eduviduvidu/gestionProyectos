<?php

namespace gestionProyectos\mainBundle\Controller;

use gestionProyectos\mainBundle\Form\TareaType;
use gestionProyectos\mainBundle\Entity\Tarea;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormTareaController extends Controller {

    public function createTareaAction() {
        $titol = "Creación de Tarea";
        $tarea = new Tarea();
        $form = $this->createForm(TareaType::class, $tarea);
        return $this->render('gestionProyectosmainBundle:Form:formTarea.html.twig', array('titol' => $titol, 'form' => $form->createView()));
        //return $this->render('gestionProyectosmainBundle:Default:formUsuario.html.twig');
    }

}
