<?php

/* gestionProyectosmainBundle:Form:loginUsuario.html.twig */
class __TwigTemplate_4f4a9f33c7899ce437a6c8e707d7fdf8c458f9ce9fb33c4c3f654c1b4d22062b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "gestionProyectosmainBundle:Form:loginUsuario.html.twig", 1);
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
";
    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Form:loginUsuario.html.twig";
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
        return new Twig_Source("", "gestionProyectosmainBundle:Form:loginUsuario.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/loginUsuario.html.twig");
    }
}
