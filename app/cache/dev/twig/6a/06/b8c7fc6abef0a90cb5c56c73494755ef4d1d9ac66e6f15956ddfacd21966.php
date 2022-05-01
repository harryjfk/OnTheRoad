<?php

/* ::base.html.twig */
class __TwigTemplate_6a06b8c7fc6abef0a90cb5c56c73494755ef4d1d9ac66e6f15956ddfacd21966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'adstylesheets' => array($this, 'block_adstylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'additionalscripts' => array($this, 'block_additionalscripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('adstylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('additionalscripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/css/styles.css"), "html", null, true);
        echo "\"/>
        ";
    }

    // line 10
    public function block_adstylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script>

                \$(document).ready(function () {
                    \$('#mobile-button-menu').on(\"click\", function () {

                        \$('#mobile-main-menu').slideToggle('fast');
                    });

                });


            </script>

        ";
    }

    // line 35
    public function block_additionalscripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  122 => 35,  103 => 20,  98 => 19,  95 => 18,  88 => 16,  80 => 10,  74 => 8,  69 => 7,  66 => 6,  61 => 5,  52 => 35,  49 => 18,  47 => 16,  40 => 13,  37 => 10,  35 => 6,  31 => 5,  25 => 1,  232 => 67,  228 => 66,  224 => 65,  219 => 63,  215 => 62,  211 => 61,  207 => 60,  203 => 59,  199 => 58,  195 => 57,  191 => 56,  187 => 55,  183 => 54,  179 => 53,  175 => 52,  171 => 51,  166 => 49,  162 => 48,  158 => 47,  153 => 45,  149 => 44,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  91 => 17,  87 => 27,  83 => 11,  78 => 24,  73 => 22,  68 => 21,  65 => 20,  55 => 37,  48 => 9,  44 => 7,  41 => 6,  33 => 3,  30 => 2,);
    }
}
