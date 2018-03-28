<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestionProyectos\mainBundle\Form\RegistroUsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;

class FormRegistroUsuarioController extends Controller {

    public function formCreateUsuarioAction(Request $request, $data = null) {
        $usuario = new Usuario();
        $form = $this->createForm(RegistroUsuarioType::class, $usuario);


        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulario válido";
            $data = array(
                'nombre' => $form->get('Nombre')->getData(),
                'nickname' => $form->get('Nickname')->getData(),
                'password' => $form->get('Password')->getData()
            );
            $usuario->setNombre($form->get('Nombre')->getData());
            $usuario->setNickname($form->get('Nickname')->getData());
            $usuario->setPassword($form->get('Password')->getData());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $flush = $em->flush();
            if ($flush != null) {
                $status = "Usuario creado";
            } else {
                $status = "Usuario no creado";
            }
        } else {
            $status = null;
            $data = null;
        }

        return $this->render('gestionProyectosmainBundle:Form:registrarUsuario.html.twig', array('title' => 'Registrarse', 'form' => $form->createView(), 'status' => $status, 'data' => $data));
    }

}
