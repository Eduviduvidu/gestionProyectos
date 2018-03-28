<?php

/* gestionProyectosmainBundle:Default:index.html.twig */
class __TwigTemplate_2d16d96381eee0139d531b9dd71251abb1cc6d8c623bdc9a28e8bee22e84cd6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_block' => array($this, 'block_content_block'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>GesPro | ";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>
    </head>

    <body>
        ";
        // line 18
        if (array_key_exists("usuario", $context)) {
            // line 19
            echo "            ";
            if ( !(null === ($context["usuario"] ?? null))) {
                // line 20
                echo "                ";
                $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html", "gestionProyectosmainBundle:Default:index.html.twig", 20)->display($context);
                // line 21
                echo "            ";
            } else {
                // line 22
                echo "                ";
                $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/navbar.html", "gestionProyectosmainBundle:Default:index.html.twig", 22)->display($context);
                // line 23
                echo "            ";
            }
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/navbar.html", "gestionProyectosmainBundle:Default:index.html.twig", 25)->display($context);
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div class=\"container-fluid main\">
            ";
        // line 29
        $this->displayBlock('content_block', $context, $blocks);
        // line 43
        echo "        </div>
        ";
        // line 44
        $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/footer.html", "gestionProyectosmainBundle:Default:index.html.twig", 44)->display($context);
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
    </body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-grid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mainStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700\" rel=\"stylesheet\"> 
        ";
    }

    // line 29
    public function block_content_block($context, array $blocks = array())
    {
        // line 30
        echo "                <div class=\"container-fluid\">
                    <div class=\"container\">
                        <div class=\"info\">
                            ";
        // line 33
        if ( !twig_test_empty(($context["usuario"] ?? null))) {
            // line 34
            echo "                                <p>Hola, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? null), "getNickname", array()), "html", null, true);
            echo "</p>
                            ";
        } else {
            // line 36
            echo "                                <p>Hola</p>
                            ";
        }
        // line 38
        echo "
                        </div>
                    </div>
                </div>
            ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <!--<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  141 => 46,  138 => 45,  130 => 38,  126 => 36,  120 => 34,  118 => 33,  113 => 30,  110 => 29,  103 => 11,  99 => 10,  95 => 9,  90 => 8,  87 => 7,  81 => 53,  78 => 45,  76 => 44,  73 => 43,  71 => 29,  67 => 27,  64 => 26,  61 => 25,  58 => 24,  55 => 23,  52 => 22,  49 => 21,  46 => 20,  43 => 19,  41 => 18,  35 => 14,  33 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gestionProyectosmainBundle:Default:index.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/index.html.twig");
    }
}
