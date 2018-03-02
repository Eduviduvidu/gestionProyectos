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
        $__internal_ce81d05451b981029257837d21a586942987bf4db0c786ab8b131d0471e91b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce81d05451b981029257837d21a586942987bf4db0c786ab8b131d0471e91b36->enter($__internal_ce81d05451b981029257837d21a586942987bf4db0c786ab8b131d0471e91b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_48dc24b5378e261a06e075ad2f5b42ea2fa0f1b3d2154f600540be014fdc7fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc24b5378e261a06e075ad2f5b42ea2fa0f1b3d2154f600540be014fdc7fee->enter($__internal_48dc24b5378e261a06e075ad2f5b42ea2fa0f1b3d2154f600540be014fdc7fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce81d05451b981029257837d21a586942987bf4db0c786ab8b131d0471e91b36->leave($__internal_ce81d05451b981029257837d21a586942987bf4db0c786ab8b131d0471e91b36_prof);

        
        $__internal_48dc24b5378e261a06e075ad2f5b42ea2fa0f1b3d2154f600540be014fdc7fee->leave($__internal_48dc24b5378e261a06e075ad2f5b42ea2fa0f1b3d2154f600540be014fdc7fee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c58466f6cda7b49243c9e1bd5cd0174fa1562b20512a0756138648868ff6022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c58466f6cda7b49243c9e1bd5cd0174fa1562b20512a0756138648868ff6022->enter($__internal_3c58466f6cda7b49243c9e1bd5cd0174fa1562b20512a0756138648868ff6022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88ea3029ccd5b5dae6c2e2ac3f39fd3e59c7a9c9d956fd796d420f056c0d8c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ea3029ccd5b5dae6c2e2ac3f39fd3e59c7a9c9d956fd796d420f056c0d8c5a->enter($__internal_88ea3029ccd5b5dae6c2e2ac3f39fd3e59c7a9c9d956fd796d420f056c0d8c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88ea3029ccd5b5dae6c2e2ac3f39fd3e59c7a9c9d956fd796d420f056c0d8c5a->leave($__internal_88ea3029ccd5b5dae6c2e2ac3f39fd3e59c7a9c9d956fd796d420f056c0d8c5a_prof);

        
        $__internal_3c58466f6cda7b49243c9e1bd5cd0174fa1562b20512a0756138648868ff6022->leave($__internal_3c58466f6cda7b49243c9e1bd5cd0174fa1562b20512a0756138648868ff6022_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2aec106f2bff8094fbe763f8c28ee80f6402500aa0472a3eae46bad164fb7489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aec106f2bff8094fbe763f8c28ee80f6402500aa0472a3eae46bad164fb7489->enter($__internal_2aec106f2bff8094fbe763f8c28ee80f6402500aa0472a3eae46bad164fb7489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbb484e508f79b011be023252f0e7ce631e1d3d862c5d9e707a9f59df259a9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb484e508f79b011be023252f0e7ce631e1d3d862c5d9e707a9f59df259a9bf->enter($__internal_fbb484e508f79b011be023252f0e7ce631e1d3d862c5d9e707a9f59df259a9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbb484e508f79b011be023252f0e7ce631e1d3d862c5d9e707a9f59df259a9bf->leave($__internal_fbb484e508f79b011be023252f0e7ce631e1d3d862c5d9e707a9f59df259a9bf_prof);

        
        $__internal_2aec106f2bff8094fbe763f8c28ee80f6402500aa0472a3eae46bad164fb7489->leave($__internal_2aec106f2bff8094fbe763f8c28ee80f6402500aa0472a3eae46bad164fb7489_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a115c2c72a624cdd24d2367c3eb050b30d55cbd15889ce2c884be8abe61bf79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a115c2c72a624cdd24d2367c3eb050b30d55cbd15889ce2c884be8abe61bf79d->enter($__internal_a115c2c72a624cdd24d2367c3eb050b30d55cbd15889ce2c884be8abe61bf79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0412142a8b3de62c06b8edc09887498b95ef6bce2d7f93e5a2ce11382b6c44ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0412142a8b3de62c06b8edc09887498b95ef6bce2d7f93e5a2ce11382b6c44ca->enter($__internal_0412142a8b3de62c06b8edc09887498b95ef6bce2d7f93e5a2ce11382b6c44ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0412142a8b3de62c06b8edc09887498b95ef6bce2d7f93e5a2ce11382b6c44ca->leave($__internal_0412142a8b3de62c06b8edc09887498b95ef6bce2d7f93e5a2ce11382b6c44ca_prof);

        
        $__internal_a115c2c72a624cdd24d2367c3eb050b30d55cbd15889ce2c884be8abe61bf79d->leave($__internal_a115c2c72a624cdd24d2367c3eb050b30d55cbd15889ce2c884be8abe61bf79d_prof);

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
