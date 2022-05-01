<?php

/* OnTheRoadOnTheRoadBundle:TRealtrip:indexfront.html.twig */
class __TwigTemplate_71de52e9eea96b4ec926ac75f5a881c085a9134f5728a85c78324d60ee7851a9 extends Twig_Template
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
         <div class=\"col-xs-5 col-md-2\">
             <div class=\"list-group\">
                 <a href=\"#\" class=\"list-group-item active\">
                     Cras justo odio
                 </a>
                 <a href=\"#\" class=\"list-group-item\">Dapibus ac facilisis in</a>
                 <a href=\"#\" class=\"list-group-item\">Morbi leo risus</a>
                 <a href=\"#\" class=\"list-group-item\">Porta ac consectetur ac</a>
                 <a href=\"#\" class=\"list-group-item\">Vestibulum at eros</a>
             </div>
         </div>
         <div class=\"col-xs-7 col-md-10\">
             <div class=\"list-group\">
                 <a href=\"#\" class=\"list-group-item active\">
                     Cras justo odio
                 </a>
                 <a href=\"#\" class=\"list-group-item\">Dapibus ac facilisis in</a>
                 <a href=\"#\" class=\"list-group-item\">Morbi leo risus</a>
                 <a href=\"#\" class=\"list-group-item\">Porta ac consectetur ac</a>
                 <a href=\"#\" class=\"list-group-item\">Vestibulum at eros</a>
             </div>
         </div>
     </div>
     <div class=\"row\">
         <div class=\"col-xs-5 col-md-2 btn-center\"> <button type=\"button\" class=\"btn btn-sm btn-primary\">ok</button></div>
         <div class=\"col-xs-7 col-md-10 btn-center\"> <button type=\"button\" class=\"btn btn-sm btn-primary\">ok</button></div>
     </div>
 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:TRealtrip:indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
