<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2697a0a61a2dc96ac053fe80eb82e27923f19f0161161d0fa5f2aa5303e900bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_104939f4fcc5d558adffb3a377806f1b99de9f6028d7b110e5431117023cc436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104939f4fcc5d558adffb3a377806f1b99de9f6028d7b110e5431117023cc436->enter($__internal_104939f4fcc5d558adffb3a377806f1b99de9f6028d7b110e5431117023cc436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b5b42d3e0c10c178975476399923a4e912d694c14f5b36729ca553f60494ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5b42d3e0c10c178975476399923a4e912d694c14f5b36729ca553f60494ce1->enter($__internal_7b5b42d3e0c10c178975476399923a4e912d694c14f5b36729ca553f60494ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104939f4fcc5d558adffb3a377806f1b99de9f6028d7b110e5431117023cc436->leave($__internal_104939f4fcc5d558adffb3a377806f1b99de9f6028d7b110e5431117023cc436_prof);

        
        $__internal_7b5b42d3e0c10c178975476399923a4e912d694c14f5b36729ca553f60494ce1->leave($__internal_7b5b42d3e0c10c178975476399923a4e912d694c14f5b36729ca553f60494ce1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8e6756ac85925087f75b62041660b4ea579bc99689a8eeec3ae2d9192ef0c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e6756ac85925087f75b62041660b4ea579bc99689a8eeec3ae2d9192ef0c00->enter($__internal_f8e6756ac85925087f75b62041660b4ea579bc99689a8eeec3ae2d9192ef0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e10488aa47540bd332778f25ea99bee6ccc517dbcba348cebf61dffea842e448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10488aa47540bd332778f25ea99bee6ccc517dbcba348cebf61dffea842e448->enter($__internal_e10488aa47540bd332778f25ea99bee6ccc517dbcba348cebf61dffea842e448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e10488aa47540bd332778f25ea99bee6ccc517dbcba348cebf61dffea842e448->leave($__internal_e10488aa47540bd332778f25ea99bee6ccc517dbcba348cebf61dffea842e448_prof);

        
        $__internal_f8e6756ac85925087f75b62041660b4ea579bc99689a8eeec3ae2d9192ef0c00->leave($__internal_f8e6756ac85925087f75b62041660b4ea579bc99689a8eeec3ae2d9192ef0c00_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfe816dad364182e9fbb2ab0e1105545f0efbd843e30f04d89afe63640d6f7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe816dad364182e9fbb2ab0e1105545f0efbd843e30f04d89afe63640d6f7b5->enter($__internal_dfe816dad364182e9fbb2ab0e1105545f0efbd843e30f04d89afe63640d6f7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f241cc7033c0174bcd7bee418bd26d19559f05263bc96719de16a5eea0c569bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f241cc7033c0174bcd7bee418bd26d19559f05263bc96719de16a5eea0c569bb->enter($__internal_f241cc7033c0174bcd7bee418bd26d19559f05263bc96719de16a5eea0c569bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f241cc7033c0174bcd7bee418bd26d19559f05263bc96719de16a5eea0c569bb->leave($__internal_f241cc7033c0174bcd7bee418bd26d19559f05263bc96719de16a5eea0c569bb_prof);

        
        $__internal_dfe816dad364182e9fbb2ab0e1105545f0efbd843e30f04d89afe63640d6f7b5->leave($__internal_dfe816dad364182e9fbb2ab0e1105545f0efbd843e30f04d89afe63640d6f7b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7af26cdf1c882ca56919fd5e865b1328e5c93b55307e0c84a1621da258ad5460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af26cdf1c882ca56919fd5e865b1328e5c93b55307e0c84a1621da258ad5460->enter($__internal_7af26cdf1c882ca56919fd5e865b1328e5c93b55307e0c84a1621da258ad5460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0092065423f5bbfbfab82d1b4dd2a1fd2aa21ed8d6ebc7818037cff0a0564140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0092065423f5bbfbfab82d1b4dd2a1fd2aa21ed8d6ebc7818037cff0a0564140->enter($__internal_0092065423f5bbfbfab82d1b4dd2a1fd2aa21ed8d6ebc7818037cff0a0564140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0092065423f5bbfbfab82d1b4dd2a1fd2aa21ed8d6ebc7818037cff0a0564140->leave($__internal_0092065423f5bbfbfab82d1b4dd2a1fd2aa21ed8d6ebc7818037cff0a0564140_prof);

        
        $__internal_7af26cdf1c882ca56919fd5e865b1328e5c93b55307e0c84a1621da258ad5460->leave($__internal_7af26cdf1c882ca56919fd5e865b1328e5c93b55307e0c84a1621da258ad5460_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
