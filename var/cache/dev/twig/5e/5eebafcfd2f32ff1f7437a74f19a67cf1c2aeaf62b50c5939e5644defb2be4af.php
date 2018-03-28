<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
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
        $__internal_716420277de1b151565ceb9b72b5a1909122bc2ba6235fa1b7b58e63646af540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716420277de1b151565ceb9b72b5a1909122bc2ba6235fa1b7b58e63646af540->enter($__internal_716420277de1b151565ceb9b72b5a1909122bc2ba6235fa1b7b58e63646af540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_38cb8ecfad73f257d857e20c0412001c3e503344dd39be4ecd0d1ee3534bfd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cb8ecfad73f257d857e20c0412001c3e503344dd39be4ecd0d1ee3534bfd00->enter($__internal_38cb8ecfad73f257d857e20c0412001c3e503344dd39be4ecd0d1ee3534bfd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_716420277de1b151565ceb9b72b5a1909122bc2ba6235fa1b7b58e63646af540->leave($__internal_716420277de1b151565ceb9b72b5a1909122bc2ba6235fa1b7b58e63646af540_prof);

        
        $__internal_38cb8ecfad73f257d857e20c0412001c3e503344dd39be4ecd0d1ee3534bfd00->leave($__internal_38cb8ecfad73f257d857e20c0412001c3e503344dd39be4ecd0d1ee3534bfd00_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18d01694e602f45385e4804a38e29cf7130f9b6f338eefa9f7469b20f9eecef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d01694e602f45385e4804a38e29cf7130f9b6f338eefa9f7469b20f9eecef2->enter($__internal_18d01694e602f45385e4804a38e29cf7130f9b6f338eefa9f7469b20f9eecef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_500a3acaf9279e68bc99495ec8cc51d0d328fce77e840733880daebda28671bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500a3acaf9279e68bc99495ec8cc51d0d328fce77e840733880daebda28671bf->enter($__internal_500a3acaf9279e68bc99495ec8cc51d0d328fce77e840733880daebda28671bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_500a3acaf9279e68bc99495ec8cc51d0d328fce77e840733880daebda28671bf->leave($__internal_500a3acaf9279e68bc99495ec8cc51d0d328fce77e840733880daebda28671bf_prof);

        
        $__internal_18d01694e602f45385e4804a38e29cf7130f9b6f338eefa9f7469b20f9eecef2->leave($__internal_18d01694e602f45385e4804a38e29cf7130f9b6f338eefa9f7469b20f9eecef2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_664be47f20d8163394b6d19ddbfd7f313c7d59c2a62c63fecdd5ac10d5fd36af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664be47f20d8163394b6d19ddbfd7f313c7d59c2a62c63fecdd5ac10d5fd36af->enter($__internal_664be47f20d8163394b6d19ddbfd7f313c7d59c2a62c63fecdd5ac10d5fd36af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f4e299e4e279397fab518870dcd3a1d1e78969ff44c3a4d380e24c339bd08d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4e299e4e279397fab518870dcd3a1d1e78969ff44c3a4d380e24c339bd08d0->enter($__internal_6f4e299e4e279397fab518870dcd3a1d1e78969ff44c3a4d380e24c339bd08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f4e299e4e279397fab518870dcd3a1d1e78969ff44c3a4d380e24c339bd08d0->leave($__internal_6f4e299e4e279397fab518870dcd3a1d1e78969ff44c3a4d380e24c339bd08d0_prof);

        
        $__internal_664be47f20d8163394b6d19ddbfd7f313c7d59c2a62c63fecdd5ac10d5fd36af->leave($__internal_664be47f20d8163394b6d19ddbfd7f313c7d59c2a62c63fecdd5ac10d5fd36af_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ce02ab86c8bfd3ddb7dabd2771b0a64e3af14a04ae63a337f5291ed9cb9b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce02ab86c8bfd3ddb7dabd2771b0a64e3af14a04ae63a337f5291ed9cb9b4f2->enter($__internal_8ce02ab86c8bfd3ddb7dabd2771b0a64e3af14a04ae63a337f5291ed9cb9b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1868ec7b21a46e4df82de32aa843e5726a502afa7ee2e3012a0e1ba931169976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1868ec7b21a46e4df82de32aa843e5726a502afa7ee2e3012a0e1ba931169976->enter($__internal_1868ec7b21a46e4df82de32aa843e5726a502afa7ee2e3012a0e1ba931169976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1868ec7b21a46e4df82de32aa843e5726a502afa7ee2e3012a0e1ba931169976->leave($__internal_1868ec7b21a46e4df82de32aa843e5726a502afa7ee2e3012a0e1ba931169976_prof);

        
        $__internal_8ce02ab86c8bfd3ddb7dabd2771b0a64e3af14a04ae63a337f5291ed9cb9b4f2->leave($__internal_8ce02ab86c8bfd3ddb7dabd2771b0a64e3af14a04ae63a337f5291ed9cb9b4f2_prof);

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
", "@Twig/layout.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
