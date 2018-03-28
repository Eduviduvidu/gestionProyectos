<?php

/* @gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html */
class __TwigTemplate_df16382f93f83585a4db3269d0a5964f9a3fddd512203514724ac4d4c4c203b9 extends Twig_Template
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
        $__internal_b34157828b1ec346ad6e898fd338158b646edd0582d84ff6d90395d0a43825c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34157828b1ec346ad6e898fd338158b646edd0582d84ff6d90395d0a43825c6->enter($__internal_b34157828b1ec346ad6e898fd338158b646edd0582d84ff6d90395d0a43825c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html"));

        $__internal_74103d76a7f1596f4198973afa67597f2514cee31bbc5ee8ffe98a249f343a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74103d76a7f1596f4198973afa67597f2514cee31bbc5ee8ffe98a249f343a94->enter($__internal_74103d76a7f1596f4198973afa67597f2514cee31bbc5ee8ffe98a249f343a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html"));

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
        
        $__internal_b34157828b1ec346ad6e898fd338158b646edd0582d84ff6d90395d0a43825c6->leave($__internal_b34157828b1ec346ad6e898fd338158b646edd0582d84ff6d90395d0a43825c6_prof);

        
        $__internal_74103d76a7f1596f4198973afa67597f2514cee31bbc5ee8ffe98a249f343a94->leave($__internal_74103d76a7f1596f4198973afa67597f2514cee31bbc5ee8ffe98a249f343a94_prof);

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
        return array (  53 => 18,  45 => 13,  39 => 10,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"{{path('gestion_proyectosmain_homepage')}}\">GesPro</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{path('gestion_proyectosmain_homepage')}}\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{path('gestion_proyectosmain_lista_tareas')}}\">Tareas</a>
            </li>
        </ul>
        <ul class=\"navbar-nav navbar-right\">
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-outline-light text-light\" href=\"{{path('gestion_proyectosmain_logout_user')}}\">Logout</a>
            </li>
        </ul>

    </div>
</nav>", "@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/logged_navbar.html");
    }
}
