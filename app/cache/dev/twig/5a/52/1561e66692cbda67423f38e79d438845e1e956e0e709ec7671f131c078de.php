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
        echo "

     <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("check");
        echo "\" method=\"post\" class=\"form-signin\">
         <div class=\"row \">
<div class=\"col-xs-3\"></div>

             <div id=\"information-front\" class=\"col-xs-6 btn-center \">
                 <h2 class=\"form-signin-heading\">";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please sign in", array(), "messages");
        echo "</h2>

                         <label for=\"_username\" class=\"sr-only\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo "</label>

                         <input type=\"\" name=\"_username\"  id=\"_username\" class=\"form-control\"
                                placeholder=\"";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo "\" required autofocus value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                      <label for=\"_password\" class=\"sr-only\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                 <input type=\"password\" name=\"_password\" id=\"_password\" class=\"form-control\" placeholder=\"";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\" required>
                 ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "                     <div class=\"alert alert-danger error\" role=\"alert\">
                         ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "
                     </div>

                 ";
        }
        // line 25
        echo "                 <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</button>
             </div>
             <div class=\"col-xs-3\"></div>
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
        return array (  80 => 25,  73 => 21,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  54 => 16,  48 => 13,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
