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
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormRegistroUsuarioController::formCreateUsuarioAction',  '_route' => 'gestion_proyectosmain_create_user',);
        }

        // gestion_proyectosmain_login_user
        if ('/loginUsuario' === $pathinfo) {
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormLoginUsuarioController::loginUsuarioAction',  '_route' => 'gestion_proyectosmain_login_user',);
        }

        // gestion_proyectosmain_logout_user
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\LogoutController::logoutAction',  '_route' => 'gestion_proyectosmain_logout_user',);
        }

        // gestion_proyectosmain_create_tarea
        if ('/crearTarea' === $pathinfo) {
            return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::createTareaAction',  '_route' => 'gestion_proyectosmain_create_tarea',);
        }

        if (0 === strpos($pathinfo, '/tarea')) {
            // gestion_proyectosmain_lista_tareas
            if ('/tareas' === $pathinfo) {
                return array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::listaTareasAction',  '_route' => 'gestion_proyectosmain_lista_tareas',);
            }

            // gestion_proyectosmain_single_tarea
            if (preg_match('#^/tarea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_proyectosmain_single_tarea')), array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::mostrarTareaAction',));
            }

        }

        // gestion_proyectosmain_borrar_tarea
        if (0 === strpos($pathinfo, '/borrarTarea') && preg_match('#^/borrarTarea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_proyectosmain_borrar_tarea')), array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::borrarTareaAction',));
        }

        // gestion_proyectosmain_upgrade_tarea
        if (0 === strpos($pathinfo, '/upgradeTarea') && preg_match('#^/upgradeTarea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_proyectosmain_upgrade_tarea')), array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::subirEstadoTareaAction',));
        }

        // gestion_proyectosmain_downgrade_tarea
        if (0 === strpos($pathinfo, '/downgradeTarea') && preg_match('#^/downgradeTarea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_proyectosmain_downgrade_tarea')), array (  '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::bajarEstadoTareaAction',));
        }

        // homepage
        if ('/JAJA' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
