<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestionProyectos\mainBundle\Form\RegistroUsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;

class FormRegistroUsuarioController extends Controller {

    public function createUsuarioAction(Request $request) {
        $usuario = new Usuario();
        $form = $this->createForm(RegistroUsuarioType::class, $usuario);


        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
//enviem les dades a la vista per visualitzar-les
            $data = array(
                'nom' => $form->get('Nombre')->getData(),
                'nickname' => $form->get('Nickname')->getData(),
                'password' => $form->get('Password')->getData()
            );
        } else {
            $status = null;
            $data = null;
        }

        return $this->render('gestionProyectosmainBundle:Form:registrarUsuario.html.twig', array('title' => 'Crear usuario', 'form' => $form->createView(), 'status'=>$status, 'data'=>$data));
    }

}
