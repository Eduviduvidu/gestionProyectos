<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ffd648ac7ceac12a3d524a2f0d7882a466a14bffa1fb5f2158502a6c7124c5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e53f27530d5ebecaee1213528bd97511abb39b7d60d9306f7e1b8295e9d064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e53f27530d5ebecaee1213528bd97511abb39b7d60d9306f7e1b8295e9d064->enter($__internal_b0e53f27530d5ebecaee1213528bd97511abb39b7d60d9306f7e1b8295e9d064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2b36bf850e4f657ecebec561ba9a0960954e503083586843b65080c952be8656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b36bf850e4f657ecebec561ba9a0960954e503083586843b65080c952be8656->enter($__internal_2b36bf850e4f657ecebec561ba9a0960954e503083586843b65080c952be8656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b0e53f27530d5ebecaee1213528bd97511abb39b7d60d9306f7e1b8295e9d064->leave($__internal_b0e53f27530d5ebecaee1213528bd97511abb39b7d60d9306f7e1b8295e9d064_prof);

        
        $__internal_2b36bf850e4f657ecebec561ba9a0960954e503083586843b65080c952be8656->leave($__internal_2b36bf850e4f657ecebec561ba9a0960954e503083586843b65080c952be8656_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9fce09a86e9815e4166685537bb7f4fae7dbc0b18122343b6a20c8e9286fbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fce09a86e9815e4166685537bb7f4fae7dbc0b18122343b6a20c8e9286fbb5->enter($__internal_c9fce09a86e9815e4166685537bb7f4fae7dbc0b18122343b6a20c8e9286fbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13d125ddc53c9059275aa9aea3fa5d154bd90d8349e31d6e6cf4524d1b677745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d125ddc53c9059275aa9aea3fa5d154bd90d8349e31d6e6cf4524d1b677745->enter($__internal_13d125ddc53c9059275aa9aea3fa5d154bd90d8349e31d6e6cf4524d1b677745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13d125ddc53c9059275aa9aea3fa5d154bd90d8349e31d6e6cf4524d1b677745->leave($__internal_13d125ddc53c9059275aa9aea3fa5d154bd90d8349e31d6e6cf4524d1b677745_prof);

        
        $__internal_c9fce09a86e9815e4166685537bb7f4fae7dbc0b18122343b6a20c8e9286fbb5->leave($__internal_c9fce09a86e9815e4166685537bb7f4fae7dbc0b18122343b6a20c8e9286fbb5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a69db62f75db800b843b44ac98f52e38424715fd972049e61faeb9ab5bfcd9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69db62f75db800b843b44ac98f52e38424715fd972049e61faeb9ab5bfcd9f2->enter($__internal_a69db62f75db800b843b44ac98f52e38424715fd972049e61faeb9ab5bfcd9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_204b38f710f1e90303509552f84df6a4e597ae32b7a42cacc5b4713d38f9c68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204b38f710f1e90303509552f84df6a4e597ae32b7a42cacc5b4713d38f9c68c->enter($__internal_204b38f710f1e90303509552f84df6a4e597ae32b7a42cacc5b4713d38f9c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_204b38f710f1e90303509552f84df6a4e597ae32b7a42cacc5b4713d38f9c68c->leave($__internal_204b38f710f1e90303509552f84df6a4e597ae32b7a42cacc5b4713d38f9c68c_prof);

        
        $__internal_a69db62f75db800b843b44ac98f52e38424715fd972049e61faeb9ab5bfcd9f2->leave($__internal_a69db62f75db800b843b44ac98f52e38424715fd972049e61faeb9ab5bfcd9f2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a7105afd68d5e6a8fb9cd4059c62936270ec40d2bf62da35b0bac869623fc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7105afd68d5e6a8fb9cd4059c62936270ec40d2bf62da35b0bac869623fc44->enter($__internal_4a7105afd68d5e6a8fb9cd4059c62936270ec40d2bf62da35b0bac869623fc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59a0b8e099773320abc7da8191e93da39124486b13aaaa5a73067e1c950a98e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a0b8e099773320abc7da8191e93da39124486b13aaaa5a73067e1c950a98e6->enter($__internal_59a0b8e099773320abc7da8191e93da39124486b13aaaa5a73067e1c950a98e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59a0b8e099773320abc7da8191e93da39124486b13aaaa5a73067e1c950a98e6->leave($__internal_59a0b8e099773320abc7da8191e93da39124486b13aaaa5a73067e1c950a98e6_prof);

        
        $__internal_4a7105afd68d5e6a8fb9cd4059c62936270ec40d2bf62da35b0bac869623fc44->leave($__internal_4a7105afd68d5e6a8fb9cd4059c62936270ec40d2bf62da35b0bac869623fc44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
