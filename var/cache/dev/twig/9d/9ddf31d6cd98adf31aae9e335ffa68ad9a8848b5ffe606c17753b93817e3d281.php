<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_704e012d6d33d6eb9dde2044ae5787141640c48ca6d3c58baf387020732fd61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04ce817b9e11bdbfa13a1a47c170000c9e1ca75f0ef8501e8c64eea795a406f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ce817b9e11bdbfa13a1a47c170000c9e1ca75f0ef8501e8c64eea795a406f6->enter($__internal_04ce817b9e11bdbfa13a1a47c170000c9e1ca75f0ef8501e8c64eea795a406f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef662b033267fd9409ece2e5efdfb3e422cd82dba41eb05515d99382f2e40121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef662b033267fd9409ece2e5efdfb3e422cd82dba41eb05515d99382f2e40121->enter($__internal_ef662b033267fd9409ece2e5efdfb3e422cd82dba41eb05515d99382f2e40121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ce817b9e11bdbfa13a1a47c170000c9e1ca75f0ef8501e8c64eea795a406f6->leave($__internal_04ce817b9e11bdbfa13a1a47c170000c9e1ca75f0ef8501e8c64eea795a406f6_prof);

        
        $__internal_ef662b033267fd9409ece2e5efdfb3e422cd82dba41eb05515d99382f2e40121->leave($__internal_ef662b033267fd9409ece2e5efdfb3e422cd82dba41eb05515d99382f2e40121_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_542b17d3e76e0e475aff1bdf49c33a59f417f3a96a37294f629b817e321221d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542b17d3e76e0e475aff1bdf49c33a59f417f3a96a37294f629b817e321221d7->enter($__internal_542b17d3e76e0e475aff1bdf49c33a59f417f3a96a37294f629b817e321221d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e340ffe8ed68385389c34347f7dd4341f01f138f857b7aa488c9380592bf94b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e340ffe8ed68385389c34347f7dd4341f01f138f857b7aa488c9380592bf94b6->enter($__internal_e340ffe8ed68385389c34347f7dd4341f01f138f857b7aa488c9380592bf94b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e340ffe8ed68385389c34347f7dd4341f01f138f857b7aa488c9380592bf94b6->leave($__internal_e340ffe8ed68385389c34347f7dd4341f01f138f857b7aa488c9380592bf94b6_prof);

        
        $__internal_542b17d3e76e0e475aff1bdf49c33a59f417f3a96a37294f629b817e321221d7->leave($__internal_542b17d3e76e0e475aff1bdf49c33a59f417f3a96a37294f629b817e321221d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74993ee3f6ef8c35b023deef004f882d3563bd20b67f13e9d097d9de8ccf8e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74993ee3f6ef8c35b023deef004f882d3563bd20b67f13e9d097d9de8ccf8e30->enter($__internal_74993ee3f6ef8c35b023deef004f882d3563bd20b67f13e9d097d9de8ccf8e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a010a68596314845a6fa1295e109fd65481250ee930d5e80d46142a6819cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a010a68596314845a6fa1295e109fd65481250ee930d5e80d46142a6819cc73->enter($__internal_3a010a68596314845a6fa1295e109fd65481250ee930d5e80d46142a6819cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a010a68596314845a6fa1295e109fd65481250ee930d5e80d46142a6819cc73->leave($__internal_3a010a68596314845a6fa1295e109fd65481250ee930d5e80d46142a6819cc73_prof);

        
        $__internal_74993ee3f6ef8c35b023deef004f882d3563bd20b67f13e9d097d9de8ccf8e30->leave($__internal_74993ee3f6ef8c35b023deef004f882d3563bd20b67f13e9d097d9de8ccf8e30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f393770be89f2522ab373b32e82426d46092458f567e3e89ad64e46668764b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f393770be89f2522ab373b32e82426d46092458f567e3e89ad64e46668764b3->enter($__internal_6f393770be89f2522ab373b32e82426d46092458f567e3e89ad64e46668764b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e28d28eac268294211b1dcde8e1a5d05562a48cda2b547f83d5c65185337e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e28d28eac268294211b1dcde8e1a5d05562a48cda2b547f83d5c65185337e47->enter($__internal_5e28d28eac268294211b1dcde8e1a5d05562a48cda2b547f83d5c65185337e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e28d28eac268294211b1dcde8e1a5d05562a48cda2b547f83d5c65185337e47->leave($__internal_5e28d28eac268294211b1dcde8e1a5d05562a48cda2b547f83d5c65185337e47_prof);

        
        $__internal_6f393770be89f2522ab373b32e82426d46092458f567e3e89ad64e46668764b3->leave($__internal_6f393770be89f2522ab373b32e82426d46092458f567e3e89ad64e46668764b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
