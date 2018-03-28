<?php

/* gestionProyectosmainBundle:Form:listaTareas.html.twig */
class __TwigTemplate_329739be336b37df857172ac3ff45f6ea8688fb7401624f4c17fca4c5b7edaf8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_block($context, array $blocks = array())
    {
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
        if ((twig_length_filter($this->env, ($context["iniciadas"] ?? null)) > 0)) {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iniciadas"] ?? null));
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
        if ((twig_length_filter($this->env, ($context["proceso"] ?? null)) > 0)) {
            // line 44
            echo "
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["proceso"] ?? null));
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
        if ((twig_length_filter($this->env, ($context["hechas"] ?? null)) > 0)) {
            // line 72
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hechas"] ?? null));
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
        return array (  217 => 93,  211 => 89,  208 => 88,  195 => 81,  190 => 79,  184 => 76,  180 => 75,  176 => 73,  171 => 72,  169 => 71,  165 => 69,  161 => 66,  155 => 62,  152 => 61,  142 => 57,  136 => 54,  131 => 52,  125 => 49,  121 => 48,  117 => 46,  113 => 45,  110 => 44,  108 => 43,  104 => 41,  99 => 38,  96 => 37,  90 => 33,  86 => 31,  76 => 27,  70 => 24,  62 => 19,  58 => 18,  54 => 16,  49 => 15,  47 => 14,  41 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gestionProyectosmainBundle:Form:listaTareas.html.twig", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Form/listaTareas.html.twig");
    }
}
