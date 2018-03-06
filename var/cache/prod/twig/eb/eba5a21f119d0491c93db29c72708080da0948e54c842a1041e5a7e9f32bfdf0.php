<?php

/* footer.html */
class __TwigTemplate_ccaa94bb6b2f8f33f38364bee99c1e7a69461165a12a9de3ee5b8baf53045435 extends Twig_Template
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
        return "footer.html";
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
        return new Twig_Source("", "footer.html", "C:\\xampp\\htdocs\\gestionProyectos\\app\\Resources\\views\\footer.html");
    }
}
