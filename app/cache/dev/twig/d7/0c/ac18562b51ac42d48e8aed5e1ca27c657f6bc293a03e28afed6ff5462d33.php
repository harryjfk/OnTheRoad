<?php

/* OnTheRoadOnTheRoadBundle:Admin:register.html.twig */
class __TwigTemplate_d70cac18562b51ac42d48e8aed5e1ca27c657f6bc293a03e28afed6ff5462d33 extends Twig_Template
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
        echo "     <div class=\"row \">
         <div id=\"information-front\" class=\"col-xs-12  btn-center\">

             <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\" method=\"post\">
                 <div class=\"row\">
                     <div class=\"col-xs-3\"></div>
                     <div class=\"col-xs-6\">
                         <h2 class=\"form-signin-heading\">";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
        echo "</h2>

                             ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                     <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
        echo "\"/>
                     </div>
                     <div class=\"col-xs-3\"></div>
                 </div>
             </form>
         </div>

     </div>

 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Admin:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  48 => 13,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
