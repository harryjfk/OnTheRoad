<?php

/* OnTheRoadOnTheRoadBundle:Default:index.html.twig */
class __TwigTemplate_0ce56ffea140322da87bb3dd19a6b763fb5b0722ca26b3ed4bbed94f2d2d4561 extends Twig_Template
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
     <div class =\"row \">
         <div id=\"information-front\" class=\"col-xs-12 \">
             <h1>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Who we are?", array(), "messages");
        echo "</h1>
             <p>wwwww</p>
         </div>

     </div>
 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
