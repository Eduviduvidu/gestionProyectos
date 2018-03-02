<?php

/* gestionProyectosmainBundle:Form:formUsuario.html.twig */
class __TwigTemplate_5dba4ee4ab1fadf7fe2e875c3886419c398f563fb0a7566140c1591218269d18 extends Twig_Template
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
        $__internal_1351d0c33c528d927212b404824dad6b3b61adeb363bd384202d63bd79f6a0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1351d0c33c528d927212b404824dad6b3b61adeb363bd384202d63bd79f6a0b4->enter($__internal_1351d0c33c528d927212b404824dad6b3b61adeb363bd384202d63bd79f6a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formUsuario.html.twig"));

        $__internal_c44bddc0d735edadb9f9799164516b08e5c53aedb9265ab87163fb40fb20d905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44bddc0d735edadb9f9799164516b08e5c53aedb9265ab87163fb40fb20d905->enter($__internal_c44bddc0d735edadb9f9799164516b08e5c53aedb9265ab87163fb40fb20d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:formUsuario.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_1351d0c33c528d927212b404824dad6b3b61adeb363bd384202d63bd79f6a0b4->leave($__internal_1351d0c33c528d927212b404824dad6b3b61adeb363bd384202d63bd79f6a0b4_prof);

        
        $__internal_c44bddc0d735edadb9f9799164516b08e5c53aedb9265ab87163fb40fb20d905->leave($__internal_c44bddc0d735edadb9f9799164516b08e5c53aedb9265ab87163fb40fb20d905_prof);

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
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}", "gestionProyectosmainBundle:Form:formUsuario.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/formUsuario.html.twig");
    }
}
