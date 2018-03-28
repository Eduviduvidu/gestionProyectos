<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gestion_proyectosmain_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_create_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormRegistroUsuarioController::formCreateUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registrarUsuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_login_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\FormLoginUsuarioController::loginUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginUsuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_logout_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\LogoutController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_create_tarea' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::createTareaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearTarea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_lista_tareas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::listaTareasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tareas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_single_tarea' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::mostrarTareaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tarea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_borrar_tarea' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::borrarTareaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/borrarTarea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_upgrade_tarea' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::subirEstadoTareaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/upgradeTarea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_proyectosmain_downgrade_tarea' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'gestionProyectos\\mainBundle\\Controller\\TareasController::bajarEstadoTareaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/downgradeTarea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/JAJA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
