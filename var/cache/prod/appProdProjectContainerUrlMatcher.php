<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // gestion_proyectosmain_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_proyectosmain_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestion_proyectosmain_homepage'));
            }

            return $ret;
        }

        // gestion_proyectosmain_create_user
        if ('/registrarUsuario' === $pathinfo) {
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormUsuarioController::createUsuarioAction',  '_route' => 'gestion_proyectosmain_create_user',);
        }

        // gestion_proyectosmain_create_tarea
        if ('/formTarea' === $pathinfo) {
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormTareaController::createTareaAction',  '_route' => 'gestion_proyectosmain_create_tarea',);
        }

        // homepage
        if ('/JAJA' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
