<?php

/* OnTheRoadOnTheRoadBundle:TComment:viewfront.html.twig */
class __TwigTemplate_fdef10f96f76ee8d511094fb899c541348b7123566d82218b41f58780088aee0 extends Twig_Template
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
        // line 5
        echo "     <div class=\"row\">
         <div class=\"col-xs-12 col-md-12 question-button\">
             <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\"> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back", array(), "messages");
        echo "</a>
         </div>
     </div>
         ";
        // line 11
        echo "     <div class=\"row\">
         <ul class=\"list-group\">

             <li class=\"list-group-item\">
                 <div class=\"row \">
                     <div class=\"col-xs-9 col-md-10 question-head\">
                         <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/images/comment.png"), "html", null, true);
        echo "\">
                         <a class=\"updt\"
                            >
                             ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "topiccomment"), "html", null, true);
        echo "</a>

                         <p> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "textcomment"), "html", null, true);
        echo " </p>
                     </div>
                     <div class=\"col-xs-3 col-md-2 question-user\">
                         <div>
                             <img
                                     src=\"http://www.cubamyway.com/volatiles/images/00e64a698a2c06dd9e6971f7f0a623b5.jpg\">

                             <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "Iduser"), "nameuser"), "html", null, true);
        echo "</p>
                         </div>
                     </div>
                 </div>
             </li>

         </ul>
     </div>

 ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:TComment:viewfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  64 => 22,  59 => 20,  53 => 17,  45 => 11,  37 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
