<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
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
        $__internal_e5bdfc3384dc3ccdf0ccb25f045e83d52672c8ffe606c71be4c1339cd2e84207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bdfc3384dc3ccdf0ccb25f045e83d52672c8ffe606c71be4c1339cd2e84207->enter($__internal_e5bdfc3384dc3ccdf0ccb25f045e83d52672c8ffe606c71be4c1339cd2e84207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_43eb6501f7c0ab4f859a4828e9d41d460c5d6072063e9e7ac7fd7b6d4337394e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eb6501f7c0ab4f859a4828e9d41d460c5d6072063e9e7ac7fd7b6d4337394e->enter($__internal_43eb6501f7c0ab4f859a4828e9d41d460c5d6072063e9e7ac7fd7b6d4337394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bdfc3384dc3ccdf0ccb25f045e83d52672c8ffe606c71be4c1339cd2e84207->leave($__internal_e5bdfc3384dc3ccdf0ccb25f045e83d52672c8ffe606c71be4c1339cd2e84207_prof);

        
        $__internal_43eb6501f7c0ab4f859a4828e9d41d460c5d6072063e9e7ac7fd7b6d4337394e->leave($__internal_43eb6501f7c0ab4f859a4828e9d41d460c5d6072063e9e7ac7fd7b6d4337394e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f0421bd1e4ecc0d4d8d9b071cb610b78254badfe5a2406bd02120b0082e758b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0421bd1e4ecc0d4d8d9b071cb610b78254badfe5a2406bd02120b0082e758b->enter($__internal_0f0421bd1e4ecc0d4d8d9b071cb610b78254badfe5a2406bd02120b0082e758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9d763ae54789f01b02a20eb1f92e392b82cfd4c12e46631fdf02f432eb9f9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d763ae54789f01b02a20eb1f92e392b82cfd4c12e46631fdf02f432eb9f9ce->enter($__internal_e9d763ae54789f01b02a20eb1f92e392b82cfd4c12e46631fdf02f432eb9f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9d763ae54789f01b02a20eb1f92e392b82cfd4c12e46631fdf02f432eb9f9ce->leave($__internal_e9d763ae54789f01b02a20eb1f92e392b82cfd4c12e46631fdf02f432eb9f9ce_prof);

        
        $__internal_0f0421bd1e4ecc0d4d8d9b071cb610b78254badfe5a2406bd02120b0082e758b->leave($__internal_0f0421bd1e4ecc0d4d8d9b071cb610b78254badfe5a2406bd02120b0082e758b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fc08f11585a972c012a06452572ba9069b5545cf14437e872b060a4ed9bdcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc08f11585a972c012a06452572ba9069b5545cf14437e872b060a4ed9bdcfd->enter($__internal_9fc08f11585a972c012a06452572ba9069b5545cf14437e872b060a4ed9bdcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5fadc1c46329c3c4375d980e386de4768e78dfcf28de5ac9d580a236bd4c8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fadc1c46329c3c4375d980e386de4768e78dfcf28de5ac9d580a236bd4c8eb->enter($__internal_a5fadc1c46329c3c4375d980e386de4768e78dfcf28de5ac9d580a236bd4c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a5fadc1c46329c3c4375d980e386de4768e78dfcf28de5ac9d580a236bd4c8eb->leave($__internal_a5fadc1c46329c3c4375d980e386de4768e78dfcf28de5ac9d580a236bd4c8eb_prof);

        
        $__internal_9fc08f11585a972c012a06452572ba9069b5545cf14437e872b060a4ed9bdcfd->leave($__internal_9fc08f11585a972c012a06452572ba9069b5545cf14437e872b060a4ed9bdcfd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_801a9713ea1c888ec5d87266123b1dfb53c2c0268153f0818b471615583720dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801a9713ea1c888ec5d87266123b1dfb53c2c0268153f0818b471615583720dd->enter($__internal_801a9713ea1c888ec5d87266123b1dfb53c2c0268153f0818b471615583720dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d9a4a76d10a6310dd291b823d48b5933e9cab4c0cff2570ee1c756d19a3efbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9a4a76d10a6310dd291b823d48b5933e9cab4c0cff2570ee1c756d19a3efbc->enter($__internal_3d9a4a76d10a6310dd291b823d48b5933e9cab4c0cff2570ee1c756d19a3efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3d9a4a76d10a6310dd291b823d48b5933e9cab4c0cff2570ee1c756d19a3efbc->leave($__internal_3d9a4a76d10a6310dd291b823d48b5933e9cab4c0cff2570ee1c756d19a3efbc_prof);

        
        $__internal_801a9713ea1c888ec5d87266123b1dfb53c2c0268153f0818b471615583720dd->leave($__internal_801a9713ea1c888ec5d87266123b1dfb53c2c0268153f0818b471615583720dd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
