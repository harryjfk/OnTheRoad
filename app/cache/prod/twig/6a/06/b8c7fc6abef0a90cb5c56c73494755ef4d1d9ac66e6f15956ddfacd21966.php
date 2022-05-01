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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
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

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
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
        return array (  87 => 17,  82 => 16,  79 => 15,  75 => 14,  72 => 13,  66 => 8,  61 => 7,  58 => 6,  44 => 15,  35 => 10,  33 => 6,  29 => 5,  23 => 1,  80 => 16,  77 => 15,  71 => 24,  69 => 23,  62 => 18,  60 => 15,  53 => 5,  47 => 32,  42 => 13,  39 => 4,  36 => 3,  30 => 2,  55 => 12,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
