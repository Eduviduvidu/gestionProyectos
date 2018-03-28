<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
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
        $__internal_08025742b68e9b9787441d0f2dacff16ad7daddb43874e107278c2d542ea7533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08025742b68e9b9787441d0f2dacff16ad7daddb43874e107278c2d542ea7533->enter($__internal_08025742b68e9b9787441d0f2dacff16ad7daddb43874e107278c2d542ea7533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4fa033ad0d5faf8818427d76f324262b461ede093a03760c484e909ea40f2d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa033ad0d5faf8818427d76f324262b461ede093a03760c484e909ea40f2d3c->enter($__internal_4fa033ad0d5faf8818427d76f324262b461ede093a03760c484e909ea40f2d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08025742b68e9b9787441d0f2dacff16ad7daddb43874e107278c2d542ea7533->leave($__internal_08025742b68e9b9787441d0f2dacff16ad7daddb43874e107278c2d542ea7533_prof);

        
        $__internal_4fa033ad0d5faf8818427d76f324262b461ede093a03760c484e909ea40f2d3c->leave($__internal_4fa033ad0d5faf8818427d76f324262b461ede093a03760c484e909ea40f2d3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_400f8f1b94bccb72660969faa7d416a16525306779a6420a82bb6954583e1b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400f8f1b94bccb72660969faa7d416a16525306779a6420a82bb6954583e1b81->enter($__internal_400f8f1b94bccb72660969faa7d416a16525306779a6420a82bb6954583e1b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_25fac75b564a82b7ac71cfeebff1dc42eaf32bec1836303f69601db8e1aa9383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fac75b564a82b7ac71cfeebff1dc42eaf32bec1836303f69601db8e1aa9383->enter($__internal_25fac75b564a82b7ac71cfeebff1dc42eaf32bec1836303f69601db8e1aa9383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_25fac75b564a82b7ac71cfeebff1dc42eaf32bec1836303f69601db8e1aa9383->leave($__internal_25fac75b564a82b7ac71cfeebff1dc42eaf32bec1836303f69601db8e1aa9383_prof);

        
        $__internal_400f8f1b94bccb72660969faa7d416a16525306779a6420a82bb6954583e1b81->leave($__internal_400f8f1b94bccb72660969faa7d416a16525306779a6420a82bb6954583e1b81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c0a849b3818efaacc88361cd84ef7f5305dc9338d4458539d568565cef41555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0a849b3818efaacc88361cd84ef7f5305dc9338d4458539d568565cef41555->enter($__internal_7c0a849b3818efaacc88361cd84ef7f5305dc9338d4458539d568565cef41555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c132ccc1ac91991dfacf1f8ea8cedfa7b3079e5edc0ddd8d9e2d9f04e1c3d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c132ccc1ac91991dfacf1f8ea8cedfa7b3079e5edc0ddd8d9e2d9f04e1c3d36->enter($__internal_3c132ccc1ac91991dfacf1f8ea8cedfa7b3079e5edc0ddd8d9e2d9f04e1c3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3c132ccc1ac91991dfacf1f8ea8cedfa7b3079e5edc0ddd8d9e2d9f04e1c3d36->leave($__internal_3c132ccc1ac91991dfacf1f8ea8cedfa7b3079e5edc0ddd8d9e2d9f04e1c3d36_prof);

        
        $__internal_7c0a849b3818efaacc88361cd84ef7f5305dc9338d4458539d568565cef41555->leave($__internal_7c0a849b3818efaacc88361cd84ef7f5305dc9338d4458539d568565cef41555_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fffa1d0c479909a9cc3f899094cd0a478b98f606fc9e02d657c178b9a935463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fffa1d0c479909a9cc3f899094cd0a478b98f606fc9e02d657c178b9a935463->enter($__internal_5fffa1d0c479909a9cc3f899094cd0a478b98f606fc9e02d657c178b9a935463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0ab3e2802da96890a51f526c28bbc10f9273f001eeda89eef76ba51ce89f500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ab3e2802da96890a51f526c28bbc10f9273f001eeda89eef76ba51ce89f500->enter($__internal_e0ab3e2802da96890a51f526c28bbc10f9273f001eeda89eef76ba51ce89f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0ab3e2802da96890a51f526c28bbc10f9273f001eeda89eef76ba51ce89f500->leave($__internal_e0ab3e2802da96890a51f526c28bbc10f9273f001eeda89eef76ba51ce89f500_prof);

        
        $__internal_5fffa1d0c479909a9cc3f899094cd0a478b98f606fc9e02d657c178b9a935463->leave($__internal_5fffa1d0c479909a9cc3f899094cd0a478b98f606fc9e02d657c178b9a935463_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
