<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7710d2dccece74f3b62c9a18e92480e60839b9621ebde2ddec7639432f8311af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7710d2dccece74f3b62c9a18e92480e60839b9621ebde2ddec7639432f8311af->enter($__internal_7710d2dccece74f3b62c9a18e92480e60839b9621ebde2ddec7639432f8311af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bfd2083711da4d4ca00413ad633ae23f076414cd1be85d4df9ee80948c9c148c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd2083711da4d4ca00413ad633ae23f076414cd1be85d4df9ee80948c9c148c->enter($__internal_bfd2083711da4d4ca00413ad633ae23f076414cd1be85d4df9ee80948c9c148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7710d2dccece74f3b62c9a18e92480e60839b9621ebde2ddec7639432f8311af->leave($__internal_7710d2dccece74f3b62c9a18e92480e60839b9621ebde2ddec7639432f8311af_prof);

        
        $__internal_bfd2083711da4d4ca00413ad633ae23f076414cd1be85d4df9ee80948c9c148c->leave($__internal_bfd2083711da4d4ca00413ad633ae23f076414cd1be85d4df9ee80948c9c148c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c05509abf3196e16d4016b761dab2d30aa2bac30508c49f2cde0f672158e5de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05509abf3196e16d4016b761dab2d30aa2bac30508c49f2cde0f672158e5de7->enter($__internal_c05509abf3196e16d4016b761dab2d30aa2bac30508c49f2cde0f672158e5de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d993c7f60c75cfb43ea4b42dbf58706f9db6e9238d81b5519d3d2645779a4fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d993c7f60c75cfb43ea4b42dbf58706f9db6e9238d81b5519d3d2645779a4fa3->enter($__internal_d993c7f60c75cfb43ea4b42dbf58706f9db6e9238d81b5519d3d2645779a4fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d993c7f60c75cfb43ea4b42dbf58706f9db6e9238d81b5519d3d2645779a4fa3->leave($__internal_d993c7f60c75cfb43ea4b42dbf58706f9db6e9238d81b5519d3d2645779a4fa3_prof);

        
        $__internal_c05509abf3196e16d4016b761dab2d30aa2bac30508c49f2cde0f672158e5de7->leave($__internal_c05509abf3196e16d4016b761dab2d30aa2bac30508c49f2cde0f672158e5de7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1408851e0c1bb298c72c403f542ae81d56575f3498ea63bf78888c650b682e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1408851e0c1bb298c72c403f542ae81d56575f3498ea63bf78888c650b682e67->enter($__internal_1408851e0c1bb298c72c403f542ae81d56575f3498ea63bf78888c650b682e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8653ad6f2e127e29ef35fcb5c9ae72c2f6eb1ec55d43be71cfa00a393e7855f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8653ad6f2e127e29ef35fcb5c9ae72c2f6eb1ec55d43be71cfa00a393e7855f->enter($__internal_b8653ad6f2e127e29ef35fcb5c9ae72c2f6eb1ec55d43be71cfa00a393e7855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8653ad6f2e127e29ef35fcb5c9ae72c2f6eb1ec55d43be71cfa00a393e7855f->leave($__internal_b8653ad6f2e127e29ef35fcb5c9ae72c2f6eb1ec55d43be71cfa00a393e7855f_prof);

        
        $__internal_1408851e0c1bb298c72c403f542ae81d56575f3498ea63bf78888c650b682e67->leave($__internal_1408851e0c1bb298c72c403f542ae81d56575f3498ea63bf78888c650b682e67_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eacfd48209b384e046f5db545fbab666130941599959784125619a7c741b999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eacfd48209b384e046f5db545fbab666130941599959784125619a7c741b999->enter($__internal_2eacfd48209b384e046f5db545fbab666130941599959784125619a7c741b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a9af0d57db2eecca2df2c0f3adaa22fda2de4b3b2f1ad4067de2e004f5b0d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9af0d57db2eecca2df2c0f3adaa22fda2de4b3b2f1ad4067de2e004f5b0d0e->enter($__internal_8a9af0d57db2eecca2df2c0f3adaa22fda2de4b3b2f1ad4067de2e004f5b0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8a9af0d57db2eecca2df2c0f3adaa22fda2de4b3b2f1ad4067de2e004f5b0d0e->leave($__internal_8a9af0d57db2eecca2df2c0f3adaa22fda2de4b3b2f1ad4067de2e004f5b0d0e_prof);

        
        $__internal_2eacfd48209b384e046f5db545fbab666130941599959784125619a7c741b999->leave($__internal_2eacfd48209b384e046f5db545fbab666130941599959784125619a7c741b999_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
