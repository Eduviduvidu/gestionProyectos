<?php

/* gestionProyectosmainBundle:Form:registrarUsuario.html.twig */
class __TwigTemplate_b26d3ab3bc274d09670d96845cbc72ba59c4f979e53f90ac14e49a1a64107f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "gestionProyectosmainBundle:Form:registrarUsuario.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_block($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form\">
        ";
        // line 5
        if (($context["status"] ?? null)) {
            // line 6
            echo "            <span class=\"err-msg\">";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <div class=\"form-err\">

    </div>
";
    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Form:registrarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gestionProyectosmainBundle:Form:registrarUsuario.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/registrarUsuario.html.twig");
    }
}
