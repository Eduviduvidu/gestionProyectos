<?php

/* gestionProyectosmainBundle:Form:formTarea.html.twig */
class __TwigTemplate_21c2334c805d542155cf154bc99e9c8023347c8e4988f86c16c959409db75cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "gestionProyectosmainBundle:Form:formTarea.html.twig", 1);
        $this->blocks = array(
            'content_block' => array($this, 'block_content_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b7e7a18d5bca5cbe38f6c9c31de7752ddafde0973fdca204aa0944913fd81a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7e7a18d5bca5cbe38f6c9c31de7752ddafde0973fdca204aa0944913fd81a0->enter($__internal_2b7e7a18d5bca5cbe38f6c9c31de7752ddafde0973fdca204aa0944913fd81a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formTarea.html.twig"));

        $__internal_fab97fa37931e7c76c0f219590bd5657dce496dd458ec4c53df2dca9a9e20e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab97fa37931e7c76c0f219590bd5657dce496dd458ec4c53df2dca9a9e20e33->enter($__internal_fab97fa37931e7c76c0f219590bd5657dce496dd458ec4c53df2dca9a9e20e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formTarea.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7e7a18d5bca5cbe38f6c9c31de7752ddafde0973fdca204aa0944913fd81a0->leave($__internal_2b7e7a18d5bca5cbe38f6c9c31de7752ddafde0973fdca204aa0944913fd81a0_prof);

        
        $__internal_fab97fa37931e7c76c0f219590bd5657dce496dd458ec4c53df2dca9a9e20e33->leave($__internal_fab97fa37931e7c76c0f219590bd5657dce496dd458ec4c53df2dca9a9e20e33_prof);

    }

    // line 3
    public function block_content_block($context, array $blocks = array())
    {
        $__internal_4980cac2c57a028d6a60fe5946c71825c64ac38ff1c6083cb5637ac2ddc416a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4980cac2c57a028d6a60fe5946c71825c64ac38ff1c6083cb5637ac2ddc416a1->enter($__internal_4980cac2c57a028d6a60fe5946c71825c64ac38ff1c6083cb5637ac2ddc416a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        $__internal_bda5d815657c01195b5addcaf0dc78ab85e4dfa921b047a1aac8d70b90437480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda5d815657c01195b5addcaf0dc78ab85e4dfa921b047a1aac8d70b90437480->enter($__internal_bda5d815657c01195b5addcaf0dc78ab85e4dfa921b047a1aac8d70b90437480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        // line 4
        echo "    <div class=\"form\">
        ";
        // line 5
        if (($context["status"] ?? $this->getContext($context, "status"))) {
            // line 6
            echo "            <span class=\"err-msg\">";
            echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"form-err\">

    </div>
";
        
        $__internal_bda5d815657c01195b5addcaf0dc78ab85e4dfa921b047a1aac8d70b90437480->leave($__internal_bda5d815657c01195b5addcaf0dc78ab85e4dfa921b047a1aac8d70b90437480_prof);

        
        $__internal_4980cac2c57a028d6a60fe5946c71825c64ac38ff1c6083cb5637ac2ddc416a1->leave($__internal_4980cac2c57a028d6a60fe5946c71825c64ac38ff1c6083cb5637ac2ddc416a1_prof);

    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Form:formTarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gestionProyectosmainBundle/Resources/views/Default/index.html.twig' %}

{% block content_block %}
    <div class=\"form\">
        {% if status %}
            <span class=\"err-msg\">{{status}}</span>
        {% endif %}
        {{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}
    </div>
    <div class=\"form-err\">

    </div>
{% endblock %}", "gestionProyectosmainBundle:Form:formTarea.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/formTarea.html.twig");
    }
}
