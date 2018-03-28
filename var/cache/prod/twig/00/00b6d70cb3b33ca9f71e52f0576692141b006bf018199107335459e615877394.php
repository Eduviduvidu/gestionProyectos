<?php

/* @gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html */
class __TwigTemplate_363c9c88fa314bbb75c8822a39114752783e7b29b332bcce971dd64636424473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_homepage");
        echo "\">GesPro</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_homepage");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_lista_tareas");
        echo "\">Tareas</a>
            </li>
        </ul>
        <ul class=\"navbar-nav navbar-right\">
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-outline-light text-light\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_logout_user");
        echo "\">Logout</a>
            </li>
        </ul>

    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  39 => 13,  33 => 10,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/logged_navbar.html");
    }
}
