<?php

/* gestionProyectosmainBundle:Form:listaTareas.html.twig */
class __TwigTemplate_86152eeb934620c9ca109258298b45e25ae0441af352dbf2e554c7aae3bbdf42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gestionProyectosmainBundle/Resources/views/Default/index.html.twig", "gestionProyectosmainBundle:Form:listaTareas.html.twig", 1);
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
        $__internal_3be12e135fc0575327a7b73432fb34ed8cf94341c60cbd0ccd0ba9508ebf72ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be12e135fc0575327a7b73432fb34ed8cf94341c60cbd0ccd0ba9508ebf72ab->enter($__internal_3be12e135fc0575327a7b73432fb34ed8cf94341c60cbd0ccd0ba9508ebf72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:listaTareas.html.twig"));

        $__internal_7a23ac5b49bb63f4e5b03e10e91dc92d349e16a02c4dd313a18aa0e1198caf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a23ac5b49bb63f4e5b03e10e91dc92d349e16a02c4dd313a18aa0e1198caf3a->enter($__internal_7a23ac5b49bb63f4e5b03e10e91dc92d349e16a02c4dd313a18aa0e1198caf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionProyectosmainBundle:Form:listaTareas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be12e135fc0575327a7b73432fb34ed8cf94341c60cbd0ccd0ba9508ebf72ab->leave($__internal_3be12e135fc0575327a7b73432fb34ed8cf94341c60cbd0ccd0ba9508ebf72ab_prof);

        
        $__internal_7a23ac5b49bb63f4e5b03e10e91dc92d349e16a02c4dd313a18aa0e1198caf3a->leave($__internal_7a23ac5b49bb63f4e5b03e10e91dc92d349e16a02c4dd313a18aa0e1198caf3a_prof);

    }

    // line 3
    public function block_content_block($context, array $blocks = array())
    {
        $__internal_0f07beac2879e38dacc9e7a070b7cbd76efba66e44342855da6860ae3496a359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f07beac2879e38dacc9e7a070b7cbd76efba66e44342855da6860ae3496a359->enter($__internal_0f07beac2879e38dacc9e7a070b7cbd76efba66e44342855da6860ae3496a359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        $__internal_d7b09720bc72f857eedab0548af4c9b526b74a6fd00f05bd90d7f5b59ee25f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b09720bc72f857eedab0548af4c9b526b74a6fd00f05bd90d7f5b59ee25f73->enter($__internal_d7b09720bc72f857eedab0548af4c9b526b74a6fd00f05bd90d7f5b59ee25f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_block"));

        // line 4
        echo "    <div class=\"main-tareas container-fluid\">
        <!--<div id=\"menu-tareas\">
            <a class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_create_tarea");
        echo "\">Crear</a>
        </div>-->
        <div class=\"row\">
            ";
        // line 10
        echo "
            <div class=\"lista-tareas  col-lg-3\">
                <div class=\"lista-tareas-title\">Iniciadas</div>
                <div class=\"tareas\">
                    ";
        // line 14
        if ((twig_length_filter($this->env, ($context["iniciadas"] ?? $this->getContext($context, "iniciadas"))) > 0)) {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iniciadas"] ?? $this->getContext($context, "iniciadas")));
            foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
                // line 16
                echo "                            <div class=\"tarea\">
                                <div class=\"tarea-info\">
                                    <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "getNombre", array()), "html", null, true);
                echo "</p>
                                    <p>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "getDescripcion", array()), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"tarea-buttons\">
                                    <a class=\"btn btn-primary left-btn\" hidden><i class=\"fas fa-angle-double-left\"></i></a>
                                    <div class=\"center-btns\">
                                        <a class=\"btn btn-danger\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_borrar_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\">Borrar</a>
                                        <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                    </div>
                                    <a class=\"btn btn-primary right-btn round\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_upgrade_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\"><i class=\"fas fa-angle-double-right\"></i></a>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
                    ";
        } else {
            // line 33
            echo "                        <div class=\"no-tareas\">
                            <p>No hay tareas</p>
                        </div>
                    ";
        }
        // line 37
        echo "                </div>
                <a id=\"crear-tarea-btn\" class=\"btn btn-success col-sm-12\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_create_tarea");
        echo "\"><i class=\"fas fa-plus\"></i></a>
            </div>
            ";
        // line 41
        echo "            <div class=\"lista-tareas col-lg-3\">
                <div class=\"lista-tareas-title\">En proceso</div>
                ";
        // line 43
        if ((twig_length_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso"))) > 0)) {
            // line 44
            echo "
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["proceso"] ?? $this->getContext($context, "proceso")));
            foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
                // line 46
                echo "                        <div class=\"tarea\">
                            <div class=\"tarea-info\">
                                <p>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "getNombre", array()), "html", null, true);
                echo "</p>
                                <p>";
                // line 49
                echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["tarea"], "getDescripcion", array()), 0, 55) . "..."), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"tarea-buttons\">
                                <a class=\"btn btn-primary left-btn round\"  href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_downgrade_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\"><i class=\"fas fa-angle-double-left\"></i></a>
                                <div class=\"center-btns\">
                                    <a class=\"btn btn-danger\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_borrar_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\">Borrar</a>
                                    <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                </div>
                                <a class=\"btn btn-primary right-btn round\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_upgrade_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\"><i class=\"fas fa-angle-double-right\"></i></a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                ";
        } else {
            // line 62
            echo "                    <div class=\"no-tareas\">
                        <p>No hay tareas</p>
                    </div>
                ";
        }
        // line 66
        echo "            </div>

            ";
        // line 69
        echo "            <div class=\"lista-tareas col-lg-3\">
                <div class=\"lista-tareas-title\">Hechas</div>
                ";
        // line 71
        if ((twig_length_filter($this->env, ($context["hechas"] ?? $this->getContext($context, "hechas"))) > 0)) {
            // line 72
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hechas"] ?? $this->getContext($context, "hechas")));
            foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
                // line 73
                echo "                        <div class=\"tarea\">
                            <div class=\"tarea-info\">
                                <p>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "getNombre", array()), "html", null, true);
                echo "</p>
                                <p>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["tarea"], "getDescripcion", array()), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"tarea-buttons\">
                                <a class=\"btn btn-primary left-btn round\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_downgrade_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\"><i class=\"fas fa-angle-double-left\"></i></a>
                                <div class=\"center-btns\">
                                    <a class=\"btn btn-danger\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_proyectosmain_borrar_tarea", array("id" => $this->getAttribute($context["tarea"], "getId", array()))), "html", null, true);
                echo "\">Borrar</a>
                                    <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                </div>
                                <a class=\"btn btn-primary right-btn\" href=\"\" hidden><i class=\"fas fa-angle-double-right\"></i></a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                ";
        } else {
            // line 89
            echo "                    <div class=\"no-tareas\">
                        <p>No hay tareas</p>
                    </div>
                ";
        }
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_d7b09720bc72f857eedab0548af4c9b526b74a6fd00f05bd90d7f5b59ee25f73->leave($__internal_d7b09720bc72f857eedab0548af4c9b526b74a6fd00f05bd90d7f5b59ee25f73_prof);

        
        $__internal_0f07beac2879e38dacc9e7a070b7cbd76efba66e44342855da6860ae3496a359->leave($__internal_0f07beac2879e38dacc9e7a070b7cbd76efba66e44342855da6860ae3496a359_prof);

    }

    public function getTemplateName()
    {
        return "gestionProyectosmainBundle:Form:listaTareas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 93,  229 => 89,  226 => 88,  213 => 81,  208 => 79,  202 => 76,  198 => 75,  194 => 73,  189 => 72,  187 => 71,  183 => 69,  179 => 66,  173 => 62,  170 => 61,  160 => 57,  154 => 54,  149 => 52,  143 => 49,  139 => 48,  135 => 46,  131 => 45,  128 => 44,  126 => 43,  122 => 41,  117 => 38,  114 => 37,  108 => 33,  104 => 31,  94 => 27,  88 => 24,  80 => 19,  76 => 18,  72 => 16,  67 => 15,  65 => 14,  59 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"main-tareas container-fluid\">
        <!--<div id=\"menu-tareas\">
            <a class=\"btn btn-success\" href=\"{{ path('gestion_proyectosmain_create_tarea')}}\">Crear</a>
        </div>-->
        <div class=\"row\">
            {# Iniciadas #}

            <div class=\"lista-tareas  col-lg-3\">
                <div class=\"lista-tareas-title\">Iniciadas</div>
                <div class=\"tareas\">
                    {%if iniciadas|length > 0%}
                        {%for tarea in iniciadas%}
                            <div class=\"tarea\">
                                <div class=\"tarea-info\">
                                    <p>{{tarea.getNombre}}</p>
                                    <p>{{tarea.getDescripcion}}</p>
                                </div>
                                <div class=\"tarea-buttons\">
                                    <a class=\"btn btn-primary left-btn\" hidden><i class=\"fas fa-angle-double-left\"></i></a>
                                    <div class=\"center-btns\">
                                        <a class=\"btn btn-danger\" href=\"{{path('gestion_proyectosmain_borrar_tarea', {\"id\":tarea.getId})}}\">Borrar</a>
                                        <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                    </div>
                                    <a class=\"btn btn-primary right-btn round\" href=\"{{path('gestion_proyectosmain_upgrade_tarea', {\"id\":tarea.getId})}}\"><i class=\"fas fa-angle-double-right\"></i></a>
                                </div>
                            </div>
                        {%endfor%}

                    {%else%}
                        <div class=\"no-tareas\">
                            <p>No hay tareas</p>
                        </div>
                    {%endif%}
                </div>
                <a id=\"crear-tarea-btn\" class=\"btn btn-success col-sm-12\" href=\"{{ path('gestion_proyectosmain_create_tarea')}}\"><i class=\"fas fa-plus\"></i></a>
            </div>
            {# En proceso #}
            <div class=\"lista-tareas col-lg-3\">
                <div class=\"lista-tareas-title\">En proceso</div>
                {%if proceso|length > 0%}

                    {%for tarea in proceso%}
                        <div class=\"tarea\">
                            <div class=\"tarea-info\">
                                <p>{{tarea.getNombre}}</p>
                                <p>{{tarea.getDescripcion|slice(0, 55) ~ '...' }}</p>
                            </div>
                            <div class=\"tarea-buttons\">
                                <a class=\"btn btn-primary left-btn round\"  href=\"{{ path('gestion_proyectosmain_downgrade_tarea', {\"id\":tarea.getId})}}\"><i class=\"fas fa-angle-double-left\"></i></a>
                                <div class=\"center-btns\">
                                    <a class=\"btn btn-danger\" href=\"{{path('gestion_proyectosmain_borrar_tarea', {\"id\":tarea.getId})}}\">Borrar</a>
                                    <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                </div>
                                <a class=\"btn btn-primary right-btn round\" href=\"{{path('gestion_proyectosmain_upgrade_tarea', {\"id\":tarea.getId})}}\"><i class=\"fas fa-angle-double-right\"></i></a>
                            </div>
                        </div>
                    {%endfor%}
                {%else%}
                    <div class=\"no-tareas\">
                        <p>No hay tareas</p>
                    </div>
                {%endif%}
            </div>

            {# Iniciadas #}
            <div class=\"lista-tareas col-lg-3\">
                <div class=\"lista-tareas-title\">Hechas</div>
                {%if hechas|length > 0%}
                    {%for tarea in hechas%}
                        <div class=\"tarea\">
                            <div class=\"tarea-info\">
                                <p>{{tarea.getNombre}}</p>
                                <p>{{tarea.getDescripcion}}</p>
                            </div>
                            <div class=\"tarea-buttons\">
                                <a class=\"btn btn-primary left-btn round\" href=\"{{ path('gestion_proyectosmain_downgrade_tarea', {\"id\":tarea.getId})}}\"><i class=\"fas fa-angle-double-left\"></i></a>
                                <div class=\"center-btns\">
                                    <a class=\"btn btn-danger\" href=\"{{path('gestion_proyectosmain_borrar_tarea', {\"id\":tarea.getId})}}\">Borrar</a>
                                    <a class=\"btn btn-primary\" href=\"\">Editar</a>
                                </div>
                                <a class=\"btn btn-primary right-btn\" href=\"\" hidden><i class=\"fas fa-angle-double-right\"></i></a>
                            </div>
                        </div>
                    {%endfor%}
                {%else%}
                    <div class=\"no-tareas\">
                        <p>No hay tareas</p>
                    </div>
                {%endif%}
            </div>
        </div>
    </div>
{% endblock %}", "gestionProyectosmainBundle:Form:listaTareas.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/listaTareas.html.twig");
    }
}
