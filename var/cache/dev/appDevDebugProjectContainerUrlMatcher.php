<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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
