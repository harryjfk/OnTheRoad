<?php

/* OnTheRoadOnTheRoadBundle:TComment:newfront.html.twig */
class __TwigTemplate_b297b8e359901343eabde204e8587ac3fd113830f7c202d7f5702e353f5d894f extends Twig_Template
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
        echo "     <div class=\"row\">
         <div class=\"col-xs-12 question-button\">
             <button type=\"button\" class=\"btn btn-sm btn-primary\">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back", array(), "messages");
        echo "</button>
         </div>
     </div>
 <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newcomment", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\" method=\"post\">
     ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

     <div class=\"row\" style=\"margin-top: 5px\">
         <div class=\"col-xs-12 btn-center\">
             <input type=\"submit\" class=\"btn btn-sm btn-primary\" value=\"";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("OK", array(), "messages");
        echo "\">
         </div>

     </div>
     </form>
 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:TComment:newfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
