<?php

/* OnTheRoadOnTheRoadBundle:Admin:header.html.twig */
class __TwigTemplate_9a5f49a1676ec2b769493647c2c99d1ac8bd661a02f2c8716601e544e581ab00 extends Twig_Template
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
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 6
            echo "
    <li class=\"";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route"))) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route"), array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
            <a href=\"#\" id=\"mobile-button-menu\" class=\"btn btn-default visible-xs\">
                <span class=\"glyphicon-th-list\"></span>

            </a>


        </div>

    </div>
    <div class=\"visible-xs\">
        <ul id=\"mobile-main-menu\">
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 22
            echo "                <li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route"))) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route"), array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
            echo "</a></li>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        </ul>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Admin:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  64 => 22,  60 => 21,  46 => 9,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
