<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a4bb77941a59accd5b774824408b54d6c42be458e0ca154a56e4e9137d9d25e3 extends Twig_Template
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
        $__internal_d067a708fb57280bf2c534755ebd369b1009627eaa4868ca77b1ca392cc3ffb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d067a708fb57280bf2c534755ebd369b1009627eaa4868ca77b1ca392cc3ffb2->enter($__internal_d067a708fb57280bf2c534755ebd369b1009627eaa4868ca77b1ca392cc3ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_367aa7b8cd05664532cae97c4e8d02b2adc45942906b131b3f38e0c14c2f99bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367aa7b8cd05664532cae97c4e8d02b2adc45942906b131b3f38e0c14c2f99bd->enter($__internal_367aa7b8cd05664532cae97c4e8d02b2adc45942906b131b3f38e0c14c2f99bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d067a708fb57280bf2c534755ebd369b1009627eaa4868ca77b1ca392cc3ffb2->leave($__internal_d067a708fb57280bf2c534755ebd369b1009627eaa4868ca77b1ca392cc3ffb2_prof);

        
        $__internal_367aa7b8cd05664532cae97c4e8d02b2adc45942906b131b3f38e0c14c2f99bd->leave($__internal_367aa7b8cd05664532cae97c4e8d02b2adc45942906b131b3f38e0c14c2f99bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
