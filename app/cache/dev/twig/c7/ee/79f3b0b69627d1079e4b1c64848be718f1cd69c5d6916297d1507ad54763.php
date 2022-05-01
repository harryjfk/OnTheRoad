<?php

/* OnTheRoadOnTheRoadBundle::adminlayout.html.twig */
class __TwigTemplate_c7ee79f3b0b69627d1079e4b1c64848be718f1cd69c5d6916297d1507ad54763 extends Twig_Template
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
        echo "Administration Panel";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Admin:loginbar.html.twig")->display($context);
        // line 6
        echo "    <div class=\"container main-panel ui-btn-corner-all\">
        ";
        // line 7
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Admin:header.html.twig")->display($context);
        // line 8
        echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"updatepanel\" id=\"updatepanel\">
                    ";
        // line 11
        $this->displayBlock('container', $context, $blocks);
        // line 14
        echo "                </div>

            </div>

        </div>
        ";
        // line 19
        $this->env->loadTemplate("OnTheRoadOnTheRoadBundle:Admin:footer.html.twig")->display($context);
        // line 20
        echo "
    </div>
";
    }

    // line 11
    public function block_container($context, array $blocks = array())
    {
        // line 12
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle::adminlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  69 => 11,  63 => 20,  61 => 19,  54 => 14,  52 => 11,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
