<?php

/* gestionProyectosmainBundle:Default:index.html.twig */
class __TwigTemplate_730a944588d33766d1a326baa13cdc3cd3bb67fa01d775116d8e45321fc095de extends Twig_Template
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
        $__internal_ee85c29b978e6f1171004551f57a453d016648c7717ff3b2b70b13b57cc5f9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee85c29b978e6f1171004551f57a453d016648c7717ff3b2b70b13b57cc5f9df->enter($__internal_ee85c29b978e6f1171004551f57a453d016648c7717ff3b2b70b13b57cc5f9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Default:index.html.twig"));

        $__internal_2e636ab9d27f177cb33273eae7fa5567f7da05aba6f38c75762a3b9990ccaa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e636ab9d27f177cb33273eae7fa5567f7da05aba6f38c75762a3b9990ccaa67->enter($__internal_2e636ab9d27f177cb33273eae7fa5567f7da05aba6f38c75762a3b9990ccaa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>GesPro | ";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>

    <body>
        ";
        // line 16
        $this->loadTemplate("navbar.html", "gestionProyectosmainBundle:Default:index.html.twig", 16)->display($context);
        // line 17
        echo "        <div class=\"container-fluid inicio\">
            ";
        // line 18
        $this->displayBlock('content_block', $context, $blocks);
        // line 27
        echo "        </div>
        ";
        // line 28
        $this->loadTemplate("footer.html", "gestionProyectosmainBundle:Default:index.html.twig", 28)->display($context);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    </body>
</html>";
        
        $__internal_ee85c29b978e6f1171004551f57a453d016648c7717ff3b2b70b13b57cc5f9df->leave($__internal_ee85c29b978e6f1171004551f57a453d016648c7717ff3b2b70b13b57cc5f9df_prof);

        
        $__internal_2e636ab9d27f177cb33273eae7fa5567f7da05aba6f38c75762a3b9990ccaa67->leave($__internal_2e636ab9d27f177cb33273eae7fa5567f7da05aba6f38c75762a3b9990ccaa67_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_399fdaaeff404d0ef52c841c9c75ef68fe6bb67fa21ca37acbc3d894ceeac8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399fdaaeff404d0ef52c841c9c75ef68fe6bb67fa21ca37acbc3d894ceeac8f6->enter($__internal_399fdaaeff404d0ef52c841c9c75ef68fe6bb67fa21ca37acbc3d894ceeac8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_551b699fbf53cc288a9729466d372cc338ed73b5e260a026d9f9eb6eb2debac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551b699fbf53cc288a9729466d372cc338ed73b5e260a026d9f9eb6eb2debac7->enter($__internal_551b699fbf53cc288a9729466d372cc338ed73b5e260a026d9f9eb6eb2debac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_551b699fbf53cc288a9729466d372cc338ed73b5e260a026d9f9eb6eb2debac7->leave($__internal_551b699fbf53cc288a9729466d372cc338ed73b5e260a026d9f9eb6eb2debac7_prof);

        
        $__internal_399fdaaeff404d0ef52c841c9c75ef68fe6bb67fa21ca37acbc3d894ceeac8f6->leave($__internal_399fdaaeff404d0ef52c841c9c75ef68fe6bb67fa21ca37acbc3d894ceeac8f6_prof);

    }

    // line 18
    public function block_content_block($context, array $blocks = array())
    {
        $__internal_1e273f032db9664e3f0d9f5786fe4d1b2fd9bea1302a9651d956ff1c0a24408e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e273f032db9664e3f0d9f5786fe4d1b2fd9bea1302a9651d956ff1c0a24408e->enter($__internal_1e273f032db9664e3f0d9f5786fe4d1b2fd9bea1302a9651d956ff1c0a24408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        $__internal_eaa3be3167c1a268b35a7a76812620f3d30244d1f8d1e5428adddbff63680d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa3be3167c1a268b35a7a76812620f3d30244d1f8d1e5428adddbff63680d96->enter($__internal_eaa3be3167c1a268b35a7a76812620f3d30244d1f8d1e5428adddbff63680d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        // line 19
        echo "                <div class=\"container-fluid\">
                    <div class=\"container\">
                        <div class=\"info\">
                            <p>Hola</p>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_eaa3be3167c1a268b35a7a76812620f3d30244d1f8d1e5428adddbff63680d96->leave($__internal_eaa3be3167c1a268b35a7a76812620f3d30244d1f8d1e5428adddbff63680d96_prof);

        
        $__internal_1e273f032db9664e3f0d9f5786fe4d1b2fd9bea1302a9651d956ff1c0a24408e->leave($__internal_1e273f032db9664e3f0d9f5786fe4d1b2fd9bea1302a9651d956ff1c0a24408e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2eb23771395e4caeade82fc7980b9f70da6f56677b6baacb39dffe0e485a9876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb23771395e4caeade82fc7980b9f70da6f56677b6baacb39dffe0e485a9876->enter($__internal_2eb23771395e4caeade82fc7980b9f70da6f56677b6baacb39dffe0e485a9876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df040fd314e2304afadc3f10bd7a4f5317964880af2ce225ffd88afc2fd0fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df040fd314e2304afadc3f10bd7a4f5317964880af2ce225ffd88afc2fd0fd81->enter($__internal_df040fd314e2304afadc3f10bd7a4f5317964880af2ce225ffd88afc2fd0fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "            <!--<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>-->
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_df040fd314e2304afadc3f10bd7a4f5317964880af2ce225ffd88afc2fd0fd81->leave($__internal_df040fd314e2304afadc3f10bd7a4f5317964880af2ce225ffd88afc2fd0fd81_prof);

        
        $__internal_2eb23771395e4caeade82fc7980b9f70da6f56677b6baacb39dffe0e485a9876->leave($__internal_2eb23771395e4caeade82fc7980b9f70da6f56677b6baacb39dffe0e485a9876_prof);

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
        return array (  147 => 31,  142 => 30,  133 => 29,  116 => 19,  107 => 18,  95 => 11,  91 => 10,  87 => 9,  82 => 8,  73 => 7,  61 => 37,  58 => 29,  56 => 28,  53 => 27,  51 => 18,  48 => 17,  46 => 16,  41 => 13,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>GesPro | {{ title }}</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
        {% block stylesheets %}
            <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{asset('css/bootstrap-grid.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{asset('css/bootstrap-reboot.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"{{asset('css/mainStyle.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock stylesheets %}
    </head>

    <body>
        {% include 'navbar.html'%}
        <div class=\"container-fluid inicio\">
            {% block content_block %}
                <div class=\"container-fluid\">
                    <div class=\"container\">
                        <div class=\"info\">
                            <p>Hola</p>
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
        {% include 'footer.html'%}
        {% block javascripts %}
            <!--<script src=\"{{asset('js/bootstrap.bundle.min.css')}}\" type=\"text/javascript\"></script>
            <script src=\"{{asset('js/bootstrap.min.css')}}\" type=\"text/javascript\"></script>-->
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        {% endblock javascripts%}

    </body>
</html>", "gestionProyectosmainBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/index.html.twig");
    }
}
