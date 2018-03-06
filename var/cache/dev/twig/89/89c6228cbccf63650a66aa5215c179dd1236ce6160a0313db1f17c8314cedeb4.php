<?php

/* gestionProyectosmainBundle:Form:formUsuario.html.twig */
class __TwigTemplate_5dba4ee4ab1fadf7fe2e875c3886419c398f563fb0a7566140c1591218269d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "gestionProyectosmainBundle:Form:formUsuario.html.twig", 1);
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
        $__internal_c1260005c98b5b566b9d975c9d7d3e471344f648965a90f1ff6e93f7c6bddfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1260005c98b5b566b9d975c9d7d3e471344f648965a90f1ff6e93f7c6bddfa6->enter($__internal_c1260005c98b5b566b9d975c9d7d3e471344f648965a90f1ff6e93f7c6bddfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formUsuario.html.twig"));

        $__internal_aa37918c0e2448685c36936e87f8ce5d96942774681de15a59aa3f39f296bc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa37918c0e2448685c36936e87f8ce5d96942774681de15a59aa3f39f296bc87->enter($__internal_aa37918c0e2448685c36936e87f8ce5d96942774681de15a59aa3f39f296bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1260005c98b5b566b9d975c9d7d3e471344f648965a90f1ff6e93f7c6bddfa6->leave($__internal_c1260005c98b5b566b9d975c9d7d3e471344f648965a90f1ff6e93f7c6bddfa6_prof);

        
        $__internal_aa37918c0e2448685c36936e87f8ce5d96942774681de15a59aa3f39f296bc87->leave($__internal_aa37918c0e2448685c36936e87f8ce5d96942774681de15a59aa3f39f296bc87_prof);

    }

    // line 3
    public function block_content_block($context, array $blocks = array())
    {
        $__internal_aa86bca27402a4d6428bf72534af2915763b65ab38929341b903803f05cd552d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa86bca27402a4d6428bf72534af2915763b65ab38929341b903803f05cd552d->enter($__internal_aa86bca27402a4d6428bf72534af2915763b65ab38929341b903803f05cd552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        $__internal_00318b57d4f7421aaf76116e6236d23db1433d133286985b0e0873e74f0550f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00318b57d4f7421aaf76116e6236d23db1433d133286985b0e0873e74f0550f4->enter($__internal_00318b57d4f7421aaf76116e6236d23db1433d133286985b0e0873e74f0550f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        // line 4
        echo "    <div class=\"form\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_00318b57d4f7421aaf76116e6236d23db1433d133286985b0e0873e74f0550f4->leave($__internal_00318b57d4f7421aaf76116e6236d23db1433d133286985b0e0873e74f0550f4_prof);

        
        $__internal_aa86bca27402a4d6428bf72534af2915763b65ab38929341b903803f05cd552d->leave($__internal_aa86bca27402a4d6428bf72534af2915763b65ab38929341b903803f05cd552d_prof);

    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Form:formUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}
    </div>
{% endblock %}", "gestionProyectosmainBundle:Form:formUsuario.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/formUsuario.html.twig");
    }
}
