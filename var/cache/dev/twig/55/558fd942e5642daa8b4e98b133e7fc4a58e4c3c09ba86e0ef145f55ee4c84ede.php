<?php

/* navbar.html */
class __TwigTemplate_829c2f2f5a0b2483bc5374cfe9409c4ec03d0cf803adba60dedd90f1c4ee8a70 extends Twig_Template
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
        $__internal_fa5a4f93be3215e32d0fa5bd963e0a63d103835368832a8f2e0a847bd623a564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5a4f93be3215e32d0fa5bd963e0a63d103835368832a8f2e0a847bd623a564->enter($__internal_fa5a4f93be3215e32d0fa5bd963e0a63d103835368832a8f2e0a847bd623a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html"));

        $__internal_39e5eabe463d2568c2d4add072a9fa631169bcd08385c40c00b501a0f1ed8fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e5eabe463d2568c2d4add072a9fa631169bcd08385c40c00b501a0f1ed8fee->enter($__internal_39e5eabe463d2568c2d4add072a9fa631169bcd08385c40c00b501a0f1ed8fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html"));

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

        </ul>
        <ul class=\"navbar-nav navbar-right\">
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-light text-dark\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_create_user");
        echo "\">Registrarse</a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-outline-light text-light\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_create_user");
        echo "\">Login</a>
            </li>
        </ul>

    </div>
</nav>";
        
        $__internal_fa5a4f93be3215e32d0fa5bd963e0a63d103835368832a8f2e0a847bd623a564->leave($__internal_fa5a4f93be3215e32d0fa5bd963e0a63d103835368832a8f2e0a847bd623a564_prof);

        
        $__internal_39e5eabe463d2568c2d4add072a9fa631169bcd08385c40c00b501a0f1ed8fee->leave($__internal_39e5eabe463d2568c2d4add072a9fa631169bcd08385c40c00b501a0f1ed8fee_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  48 => 16,  39 => 10,  28 => 2,  25 => 1,);
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

        </ul>
        <ul class=\"navbar-nav navbar-right\">
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-light text-dark\" href=\"{{path('gestion_proyectosmain_create_user')}}\">Registrarse</a>
            </li>
            <li class=\"nav-item \">
                <a class=\"nav-link btn btn-outline-light text-light\" href=\"{{path('gestion_proyectosmain_create_user')}}\">Login</a>
            </li>
        </ul>

    </div>
</nav>", "navbar.html", "C:\\xampp\\htdocs\\gestionProyectos\\app\\Resources\\views\\navbar.html");
    }
}
