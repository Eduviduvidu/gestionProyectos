<?php

/* @gestionProyectosmainBundle/Resources/views/Default/footer.html */
class __TwigTemplate_132de2eff4032c4a714bf8073216dd1856c311f315d378f7dfbfce6ffb239f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <footer class=\"page-footer font-small blue pt-4 mt-4\">
          <div class=\"container-fluid text-center text-md-left\">
              <div class=\"row\">
                  <div class=\"col-md-12\">
                      <h5 class=\"text-uppercase\">Footer Content</h5>
                      <p>Here you can use rows and columns here to organize your footer content.</p>
                  </div>

              </div>
          </div>
     
          <div class=\"footer-copyright py-3 text-center\">
              <div class=\"container-fluid\">
                  © 2018 Copyright: <a href=\"https://mdbootstrap.com/material-design-for-bootstrap/\"> GesPro.com </a>
              </div>
          </div>     
      </footer>";
    }

    public function getTemplateName()
    {
        return "@gestionProyectosmainBundle/Resources/views/Default/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gestionProyectosmainBundle/Resources/views/Default/footer.html", "D:\\Programas\\Xampp\\htdocs\\gestionProyectos\\src\\gestionProyectos\\mainBundle/Resources/views/Default/footer.html");
    }
}
