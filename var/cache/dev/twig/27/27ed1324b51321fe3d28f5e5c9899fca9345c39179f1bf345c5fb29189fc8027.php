<?php

/* @gestionProyectosmainBundle/Resources/views/Default/index.html.twig */
class __TwigTemplate_8878c4f6d5dd4eaf57d4065c1c1346be7105f059f921be63d1e2a507b596b294 extends Twig_Template
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
        $__internal_60fe5b6072b4bb7e7cafbfae9f2426b4e80c947d93b68715620f8d95aff2e0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fe5b6072b4bb7e7cafbfae9f2426b4e80c947d93b68715620f8d95aff2e0bd->enter($__internal_60fe5b6072b4bb7e7cafbfae9f2426b4e80c947d93b68715620f8d95aff2e0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig"));

        $__internal_97b692872ead3b06f89eff23fdbacc275624e13de2dfdce47420d0277e58add7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b692872ead3b06f89eff23fdbacc275624e13de2dfdce47420d0277e58add7->enter($__internal_97b692872ead3b06f89eff23fdbacc275624e13de2dfdce47420d0277e58add7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig"));

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
        // line 14
        echo "        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>
    </head>

    <body>
        ";
        // line 18
        if (array_key_exists("usuario", $context)) {
            // line 19
            echo "            ";
            if ( !(null === ($context["usuario"] ?? $this->getContext($context, "usuario")))) {
                // line 20
                echo "                ";
                $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", 20)->display($context);
                // line 21
                echo "            ";
            } else {
                // line 22
                echo "                ";
                $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/navbar.html", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", 22)->display($context);
                // line 23
                echo "            ";
            }
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "            ";
            $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/navbar.html", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", 25)->display($context);
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
        $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/footer.html", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", 44)->display($context);
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
    </body>
</html>";
        
        $__internal_60fe5b6072b4bb7e7cafbfae9f2426b4e80c947d93b68715620f8d95aff2e0bd->leave($__internal_60fe5b6072b4bb7e7cafbfae9f2426b4e80c947d93b68715620f8d95aff2e0bd_prof);

        
        $__internal_97b692872ead3b06f89eff23fdbacc275624e13de2dfdce47420d0277e58add7->leave($__internal_97b692872ead3b06f89eff23fdbacc275624e13de2dfdce47420d0277e58add7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_228472e8cb3aad7d4cd994925275b7b646dcbabcdd51f6b6ed06ca87e38ed662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228472e8cb3aad7d4cd994925275b7b646dcbabcdd51f6b6ed06ca87e38ed662->enter($__internal_228472e8cb3aad7d4cd994925275b7b646dcbabcdd51f6b6ed06ca87e38ed662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70e07d9a013e12103eef23fa0c052f6c815b61347d11cecfb2f67a1e2009b8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e07d9a013e12103eef23fa0c052f6c815b61347d11cecfb2f67a1e2009b8df->enter($__internal_70e07d9a013e12103eef23fa0c052f6c815b61347d11cecfb2f67a1e2009b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_70e07d9a013e12103eef23fa0c052f6c815b61347d11cecfb2f67a1e2009b8df->leave($__internal_70e07d9a013e12103eef23fa0c052f6c815b61347d11cecfb2f67a1e2009b8df_prof);

        
        $__internal_228472e8cb3aad7d4cd994925275b7b646dcbabcdd51f6b6ed06ca87e38ed662->leave($__internal_228472e8cb3aad7d4cd994925275b7b646dcbabcdd51f6b6ed06ca87e38ed662_prof);

    }

    // line 29
    public function block_content_block($context, array $blocks = array())
    {
        $__internal_5eee2a6181d34e32e2f6d013c8a0faf0c06d27d8bf2798a79e45ef3ceee4d06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eee2a6181d34e32e2f6d013c8a0faf0c06d27d8bf2798a79e45ef3ceee4d06b->enter($__internal_5eee2a6181d34e32e2f6d013c8a0faf0c06d27d8bf2798a79e45ef3ceee4d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        $__internal_2d2b022505183e1bbff6644436d4eb1ebe05eeb087d058a140a6e37e8539d6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2b022505183e1bbff6644436d4eb1ebe05eeb087d058a140a6e37e8539d6e4->enter($__internal_2d2b022505183e1bbff6644436d4eb1ebe05eeb087d058a140a6e37e8539d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        // line 30
        echo "                <div class=\"container-fluid\">
                    <div class=\"container\">
                        <div class=\"info\">
                            ";
        // line 33
        if ( !twig_test_empty(($context["usuario"] ?? $this->getContext($context, "usuario")))) {
            // line 34
            echo "                                <p>Hola, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["usuario"] ?? $this->getContext($context, "usuario")), "getNickname", array()), "html", null, true);
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
        
        $__internal_2d2b022505183e1bbff6644436d4eb1ebe05eeb087d058a140a6e37e8539d6e4->leave($__internal_2d2b022505183e1bbff6644436d4eb1ebe05eeb087d058a140a6e37e8539d6e4_prof);

        
        $__internal_5eee2a6181d34e32e2f6d013c8a0faf0c06d27d8bf2798a79e45ef3ceee4d06b->leave($__internal_5eee2a6181d34e32e2f6d013c8a0faf0c06d27d8bf2798a79e45ef3ceee4d06b_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31c96cde1c6914098e385ba12b63274fc20cd0b7b98698a87bf9c71cb5d505eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c96cde1c6914098e385ba12b63274fc20cd0b7b98698a87bf9c71cb5d505eb->enter($__internal_31c96cde1c6914098e385ba12b63274fc20cd0b7b98698a87bf9c71cb5d505eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a16abe7f5a79e58404fe7bfecd2dd29ee14996b030eab12df32ea83f0c98c639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16abe7f5a79e58404fe7bfecd2dd29ee14996b030eab12df32ea83f0c98c639->enter($__internal_a16abe7f5a79e58404fe7bfecd2dd29ee14996b030eab12df32ea83f0c98c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a16abe7f5a79e58404fe7bfecd2dd29ee14996b030eab12df32ea83f0c98c639->leave($__internal_a16abe7f5a79e58404fe7bfecd2dd29ee14996b030eab12df32ea83f0c98c639_prof);

        
        $__internal_31c96cde1c6914098e385ba12b63274fc20cd0b7b98698a87bf9c71cb5d505eb->leave($__internal_31c96cde1c6914098e385ba12b63274fc20cd0b7b98698a87bf9c71cb5d505eb_prof);

    }

    public function getTemplateName()
    {
        return "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 47,  183 => 46,  174 => 45,  160 => 38,  156 => 36,  150 => 34,  148 => 33,  143 => 30,  134 => 29,  121 => 11,  117 => 10,  113 => 9,  108 => 8,  99 => 7,  87 => 53,  84 => 45,  82 => 44,  79 => 43,  77 => 29,  73 => 27,  70 => 26,  67 => 25,  64 => 24,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  49 => 19,  47 => 18,  41 => 14,  39 => 7,  33 => 4,  28 => 1,);
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
            <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700\" rel=\"stylesheet\"> 
        {% endblock stylesheets %}
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>
    </head>

    <body>
        {% if usuario is defined %}
            {% if usuario is not null %}
                {% include '@gestionProyectosmainBundle/Resources/views/Default/logged_navbar.html'%}
            {%else%}
                {% include '@gestionProyectosmainBundle/Resources/views/Default/navbar.html'%}
            {%endif%}
        {%else%}
            {% include '@gestionProyectosmainBundle/Resources/views/Default/navbar.html'%}
        {%endif%}

        <div class=\"container-fluid main\">
            {% block content_block %}
                <div class=\"container-fluid\">
                    <div class=\"container\">
                        <div class=\"info\">
                            {% if  usuario is not empty %}
                                <p>Hola, {{usuario.getNickname}}</p>
                            {% else %}
                                <p>Hola</p>
                            {% endif %}

                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
        {% include '@gestionProyectosmainBundle/Resources/views/Default/footer.html'%}
        {% block javascripts %}
            <!--<script src=\"{{asset('js/bootstrap.bundle.min.css')}}\" type=\"text/javascript\"></script>
            <script src=\"{{asset('js/bootstrap.min.css')}}\" type=\"text/javascript\"></script>-->
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

        {% endblock javascripts%}

    </body>
</html>", "@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/index.html.twig");
    }
}
