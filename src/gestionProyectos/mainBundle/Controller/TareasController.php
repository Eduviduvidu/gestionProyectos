<?php

namespace gestionProyectos\mainBundle\Controller;

use gestionProyectos\mainBundle\Form\TareaType;
use gestionProyectos\mainBundle\Entity\Tarea;
use gestionProyectos\mainBundle\Entity\Usuario;
use gestionProyectos\mainBundle\Entity\Asignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TareasController extends Controller {

    public function createTareaAction(Request $request) {

        $session = $request->getSession();
        $usuario = $session->get('usuario');


        $titol = "Creación de Tarea";

        $tarea = new Tarea();
        $form = $this->createForm(TareaType::class, $tarea);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulario válido";
            $data = array(
                'nombre' => $form->get('Nombre')->getData(),
                'descripcion' => $form->get('Descripcion')->getData(),
            );

            try {
                $em = $this->getDoctrine()->getManager();
                $asignacion_repo = $em->getRepository("gestionProyectosmainBundle:Asignacion");
                
                $asignaciones = $asignacion_repo->find();
                
                
                $usuaris_repo = $em->getRepository("gestionProyectosmainBundle:Usuario");
                $usuarioCreador = $usuaris_repo->find($usuario->getId());
                $tarea->setIdCreador($usuarioCreador);
                $tarea->setNombre($form->get('Nombre')->getData());
                $tarea->setDescripcion($form->get('Descripcion')->getData());
                $tarea->setStatus(0);
                $em->persist($tarea);
                $flush = $em->flush();
                return $this->redirectToRoute('gestion_proyectosmain_lista_tareas');
            } catch (Exception $e) {
                $status = "Tarea no creada";
            }
            //return $this->redirectToRoute('gestion_proyectosmain_lista_tareas');
            //$status = $form->get('Nombre')->getData();
        } else {
            $status = null;
            $data = null;
        }

        return $this->render('gestionProyectosmainBundle:Form:formTarea.html.twig', array('title' => $titol, 'status' => $status, 'data' => $data, "usuario" => $usuario, 'form' => $form->createView()));
    }

    public function listaTareasAction(Request $request) {
        //Obtenemos el usuario
        $session = $request->getSession();
        $usuario = $session->get('usuario');

        $titol = "Lista de tareas";

        $em = $this->getDoctrine()->getManager();
        $tareas_repo = $em->getRepository("gestionProyectosmainBundle:Tarea");
        $tareas = $tareas_repo->findBy(array('idCreador' => $usuario->getId()), array('nombre' => 'ASC'));

        $iniciadas = [];
        $proceso = [];
        $hechas = [];

        foreach ($tareas as $tarea) {
            switch ($tarea->getStatus()) {
                case 0: //Inicio
                    $iniciadas[] = $tarea;
                    break;
                case 1: //En proceso
                    $proceso[] = $tarea;
                    break;
                case 2: //Hecho
                    $hechas[] = $tarea;
                    break;
            }
        }


        return $this->render('gestionProyectosmainBundle:Form:listaTareas.html.twig', array('title' => $titol, "usuario" => $usuario, "iniciadas" => $iniciadas, "proceso" => $proceso, "hechas" => $hechas));
    }

    public function borrarTareaAction(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $tareas_repo = $em->getRepository("gestionProyectosmainBundle:Tarea");
        $tarea = $tareas_repo->find($id);
        $em->remove($tarea);
        $em->flush();
        return $this->redirectToRoute('gestion_proyectosmain_lista_tareas');
    }

    public function subirEstadoTareaAction(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $tareas_repo = $em->getRepository("gestionProyectosmainBundle:Tarea");
        $tarea = $tareas_repo->find($id);
        $actualStatus = -1;
        if ($tarea->getStatus() < 2) {
            $actualStatus = $tarea->getStatus();
            $tarea->setStatus($actualStatus += 1);
            $em->flush();
        }
        return $this->redirectToRoute('gestion_proyectosmain_lista_tareas');
    }

    public function bajarEstadoTareaAction(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $tareas_repo = $em->getRepository("gestionProyectosmainBundle:Tarea");
        $tarea = $tareas_repo->find($id);
        if ($tarea->getStatus() > 0) {
            $actualStatus = $tarea->getStatus();
            $tarea->setStatus($actualStatus -= 1);
            $em->flush();
        }
        return $this->redirectToRoute('gestion_proyectosmain_lista_tareas');
    }

}
