<?php

/* OnTheRoadOnTheRoadBundle::layout.html.twig */
class __TwigTemplate_55b9203f60f3f4039519d701c4f4715b9b581eed10741971f5b91562280ef733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "On The Road";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Default:loginbar.html.twig")->display($context);
        // line 5
        echo "    <div class=\"container main-panel ui-btn-corner-all\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/images/196.jpg"), "html", null, true);
        echo "\" style=\"width:100%; height: 56px\">
            </div>
        </div>
        ";
        // line 11
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Default:header.html.twig")->display($context);
        // line 12
        echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"updatepanel\" id=\"updatepanel\">
                    ";
        // line 15
        $this->displayBlock('container', $context, $blocks);
        // line 18
        echo "                </div>

            </div>

        </div>
        ";
        // line 23
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Default:footer.html.twig")->display($context);
        // line 24
        echo "
    </div>
";
    }

    // line 15
    public function block_container($context, array $blocks = array())
    {
        // line 16
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  77 => 15,  71 => 24,  69 => 23,  62 => 18,  60 => 15,  55 => 12,  53 => 11,  47 => 8,  42 => 5,  39 => 4,  36 => 3,  30 => 2,  31 => 4,  28 => 3,);
    }
}
