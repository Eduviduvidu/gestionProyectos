<?php

/* navbar.html */
class __TwigTemplate_5ee117f9a0aadb750edfc7bc0fc994048e091d7da445dfd74a3b1d717286188c extends Twig_Template
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
        return array (  48 => 19,  42 => 16,  33 => 10,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.html", "C:\\xampp\\htdocs\\gestionProyectos\\app\\Resources\\views\\navbar.html");
    }
}
