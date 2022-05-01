<?php

/* OnTheRoadOnTheRoadBundle:Default:header.html.twig */
class __TwigTemplate_29b63c319a746b76d9cc91b825c486436c2b9bc84d47e88973fb1505df93043f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"main-header\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <ul id=\"main-menu\" class=\"nav nav-pills hidden-xs\">
                <li class=\"active\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("route", array("name" => "comments"));
        echo "\">Comentarios</a></li>
                <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("route", array("name" => "trips"));
        echo "\">Viajes</a></li>
            </ul>
            <a href=\"#\" id=\"mobile-button-menu\" class=\"btn btn-default visible-xs\">
                <span class=\"glyphicon-th-list\"></span>

            </a>


        </div>

    </div>
    <div class=\"visible-xs\">
        <ul id=\"mobile-main-menu\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("route", array("name" => "comments"));
        echo "\">Comentarios</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("route", array("name" => "trips"));
        echo "\">Viajes</a></li>
        </ul>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  25 => 5,  64 => 24,  51 => 19,  49 => 20,  43 => 14,  37 => 12,  19 => 1,  87 => 17,  82 => 16,  79 => 15,  75 => 14,  72 => 13,  66 => 8,  61 => 7,  58 => 22,  44 => 15,  35 => 10,  33 => 7,  29 => 6,  23 => 1,  80 => 16,  77 => 15,  71 => 24,  69 => 23,  62 => 18,  60 => 15,  53 => 21,  47 => 32,  42 => 13,  39 => 4,  36 => 3,  30 => 9,  55 => 12,  40 => 7,  34 => 5,  31 => 4,  28 => 8,);
    }
}
