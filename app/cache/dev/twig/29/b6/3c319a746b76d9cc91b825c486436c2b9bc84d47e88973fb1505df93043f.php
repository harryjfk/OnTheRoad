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

                <li class=\"";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "index")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
        echo "</a></li>
                <li class=\"";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "comments")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comments", array(), "messages");
        echo "</a></li>
                <li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "trips")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trips", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Trips", array(), "messages");
        echo "</a></li>
            </ul>
            <a href=\"#\" id=\"mobile-button-menu\" class=\"btn btn-default visible-xs\">
                <span class=\"glyphicon-th-list\"></span>

            </a>


        </div>

    </div>
    <div class=\"visible-xs\">
        <ul id=\"mobile-main-menu\">
            <li class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Start", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comments", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trips", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Trips", array(), "messages");
        echo "</a></li>
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
        return array (  80 => 23,  74 => 22,  68 => 21,  46 => 8,  36 => 7,  26 => 6,  19 => 1,);
    }
}
