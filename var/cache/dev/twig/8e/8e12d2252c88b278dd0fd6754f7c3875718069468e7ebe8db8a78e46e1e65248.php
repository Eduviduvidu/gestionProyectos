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
        $__internal_7f16a7b913a953c2e58acebef534500d906efb1c7c2c8f48c0c31eadfba45591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f16a7b913a953c2e58acebef534500d906efb1c7c2c8f48c0c31eadfba45591->enter($__internal_7f16a7b913a953c2e58acebef534500d906efb1c7c2c8f48c0c31eadfba45591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbaa9f071eabd5faa529c4663724fc2034cd22218e563e1330ff2dd6a5f8b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaa9f071eabd5faa529c4663724fc2034cd22218e563e1330ff2dd6a5f8b263->enter($__internal_dbaa9f071eabd5faa529c4663724fc2034cd22218e563e1330ff2dd6a5f8b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f16a7b913a953c2e58acebef534500d906efb1c7c2c8f48c0c31eadfba45591->leave($__internal_7f16a7b913a953c2e58acebef534500d906efb1c7c2c8f48c0c31eadfba45591_prof);

        
        $__internal_dbaa9f071eabd5faa529c4663724fc2034cd22218e563e1330ff2dd6a5f8b263->leave($__internal_dbaa9f071eabd5faa529c4663724fc2034cd22218e563e1330ff2dd6a5f8b263_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e924f3b9653f6f1c7d016c2051ade4897d1691dece838a36d17161cb152637ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e924f3b9653f6f1c7d016c2051ade4897d1691dece838a36d17161cb152637ce->enter($__internal_e924f3b9653f6f1c7d016c2051ade4897d1691dece838a36d17161cb152637ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc09546896c2483d842d1660b8cd8c5bf4b850e07aa5fcb9dd574651a7c63c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc09546896c2483d842d1660b8cd8c5bf4b850e07aa5fcb9dd574651a7c63c11->enter($__internal_fc09546896c2483d842d1660b8cd8c5bf4b850e07aa5fcb9dd574651a7c63c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fc09546896c2483d842d1660b8cd8c5bf4b850e07aa5fcb9dd574651a7c63c11->leave($__internal_fc09546896c2483d842d1660b8cd8c5bf4b850e07aa5fcb9dd574651a7c63c11_prof);

        
        $__internal_e924f3b9653f6f1c7d016c2051ade4897d1691dece838a36d17161cb152637ce->leave($__internal_e924f3b9653f6f1c7d016c2051ade4897d1691dece838a36d17161cb152637ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db2130af37793abf9a268edb454a5fe4e0192d8b25a2b9e8eda3508cf168b0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2130af37793abf9a268edb454a5fe4e0192d8b25a2b9e8eda3508cf168b0c7->enter($__internal_db2130af37793abf9a268edb454a5fe4e0192d8b25a2b9e8eda3508cf168b0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b82c394c09f7269df4ddcc4d3a2441ec385146bbca901bed270d41c06e729a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82c394c09f7269df4ddcc4d3a2441ec385146bbca901bed270d41c06e729a0d->enter($__internal_b82c394c09f7269df4ddcc4d3a2441ec385146bbca901bed270d41c06e729a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b82c394c09f7269df4ddcc4d3a2441ec385146bbca901bed270d41c06e729a0d->leave($__internal_b82c394c09f7269df4ddcc4d3a2441ec385146bbca901bed270d41c06e729a0d_prof);

        
        $__internal_db2130af37793abf9a268edb454a5fe4e0192d8b25a2b9e8eda3508cf168b0c7->leave($__internal_db2130af37793abf9a268edb454a5fe4e0192d8b25a2b9e8eda3508cf168b0c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ad2b843993a7a66097443f7f96266432befc042783504d8307578f72eb17660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad2b843993a7a66097443f7f96266432befc042783504d8307578f72eb17660->enter($__internal_4ad2b843993a7a66097443f7f96266432befc042783504d8307578f72eb17660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c34dada3a4298a4b79fcc8cb662a3c74d9ce7bb5b6a8c4d14dbfc134b4a7f582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34dada3a4298a4b79fcc8cb662a3c74d9ce7bb5b6a8c4d14dbfc134b4a7f582->enter($__internal_c34dada3a4298a4b79fcc8cb662a3c74d9ce7bb5b6a8c4d14dbfc134b4a7f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c34dada3a4298a4b79fcc8cb662a3c74d9ce7bb5b6a8c4d14dbfc134b4a7f582->leave($__internal_c34dada3a4298a4b79fcc8cb662a3c74d9ce7bb5b6a8c4d14dbfc134b4a7f582_prof);

        
        $__internal_4ad2b843993a7a66097443f7f96266432befc042783504d8307578f72eb17660->leave($__internal_4ad2b843993a7a66097443f7f96266432befc042783504d8307578f72eb17660_prof);

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
