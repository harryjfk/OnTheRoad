<?php

/* OnTheRoadOnTheRoadBundle:Admin:login.html.twig */
class __TwigTemplate_5a521561e66692cbda67423f38e79d438845e1e956e0e709ec7671f131c078de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnTheRoadOnTheRoadBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnTheRoadOnTheRoadBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "         <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
     ";
        }
        // line 7
        echo "     <form action=\"";
        echo $this->env->getExtension('routing')->getPath("check");
        echo "\" method=\"post\">
     <div class=\"row \">
         <div id=\"information-front\" class=\"col-xs-12 btn-center\">
             <div class=\"row input-separator\">
                 <div class=\"col-xs-12\" >
                     <div class=\"row\">

                         <div class=\"col-xs-6 btn-right\">
                             <label for=\"username\">Usuario:</label>
                         </div>
                         <div class=\"col-xs-6 btn-left\" >
                             <input name=\"_username\" id=\"username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">
                         </div>
                     </div>
                 </div>

             </div>
             <div class=\"row\">
                 <div class=\"col-xs-12\" >
                     <div class=\"row  input-separator\">

                         <div class=\"col-xs-6 btn-right\">
                             <label for=\"password\">Contraseña:</label>
                         </div>
                         <div class=\"col-xs-6 btn-left\" >
                             <input name=\"_password\" id=\"password\">
                         </div>
                     </div>
                 </div>

             </div>
             <div class=\"row  input-separator\">
                 <div class=\"col-xs-12 btn-center\" >
                     <input type=\"submit\" value=\"Iniciar\">
                     </div>
                 </div>
         </div>
         </div>
     </form>
 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
