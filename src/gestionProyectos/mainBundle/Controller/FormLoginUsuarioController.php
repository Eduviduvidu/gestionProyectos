<?php

namespace gestionProyectos\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gestionProyectos\mainBundle\Form\LoginUsuarioType;
use gestionProyectos\mainBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class FormLoginUsuarioController extends Controller {

    public function LoginUsuarioAction(Request $request, $data = null) {
        //Sessions
        $session = $request->getSession();
        
        //Status data form
        $status = null;
        $data = null;

        
        $usuario = new Usuario();

        $form = $this->createForm(LoginUsuarioType::class, $usuario);
        $form->handleRequest($request);
        $nombre = $form->get('Nombre')->getData();
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $usuaris_repo = $em->getRepository("gestionProyectosmainBundle:Usuario");
                $nombre = $form->get('Nombre')->getData();
                $password = $form->get('Password')->getData();

                $usuarioSearch = $usuaris_repo->findBy(array('nombre' => $nombre), array('nombre' => 'ASC'));
                if (count($usuarioSearch) > 0) {
                    $usuarioSearch = $usuarioSearch[0];
                    $data = $usuarioSearch->getId();
                    if ($usuarioSearch != null) {
                        if ($usuarioSearch->getPassword() == $password) {
                            /* Crear usuario, iniciamos la sesión y redireccion a tareas */
                            $session->set('usuario', $usuarioSearch);
                            $status = "Logged";
                            return $this->redirectToRoute("gestion_proyectosmain_homepage");
                        } else {
                            $status = "La contraseña no coincide";
                        }
                    }
                } else {
                    $status = "El usuario no existe";
                }
            }
        }
        return $this->render('gestionProyectosmainBundle:Form:loginUsuario.html.twig', array(
                    'title' => 'Login',
                    'form' => $form->createView(),
                    'status' => $status,
                    'data' => $data
                        )
        );
    }

}
