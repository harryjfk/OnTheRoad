<?php

/* OnTheRoadOnTheRoadBundle:Default:loginbar.html.twig */
class __TwigTemplate_ef8bebd26d2131dc9d7a2bf52597b096c3bcb6fcd0e011e69d74d41046a0b9bc extends Twig_Template
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
        echo "<div class=\"row login-bar\">
    <div class=\"col-xs-7 col-md-10\">

    </div>
    <div class=\"col-xs-3 col-md-1\" >
        <div class=\"row \">
            <div class=\"col-xs-6 btn-right padright\">
                <a  ";
        // line 8
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 9
            echo "                        href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Profile", array(), "messages");
            // line 10
            echo "
                    ";
        } else {
            // line 12
            echo "                        href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
            // line 13
            echo "                    ";
        }
        // line 14
        echo "                </a>

            </div>
            <div class=\"col-xs-6 btn-left padleft\">
                <a  ";
        // line 18
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 19
            echo "                        href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            // line 20
            echo "
                    ";
        } else {
            // line 22
            echo "                        href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                </a>
            </div>
        </div>
    </div>
    <div class=\"col-xs-2 col-md-1\" >
        <div class=\"row \">
            <div class=\"col-xs-6 btn-right padright language-icon\">

                <a href=\"

                 ";
        // line 35
        echo "

                \"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/images/english.ico"), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"col-xs-6 btn-left padleft language-icon\">
                <a href=\"";
        // line 40
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/images/spanish.ico"), "html", null, true);
        echo "\"></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:Default:loginbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  88 => 37,  84 => 35,  72 => 24,  69 => 23,  64 => 22,  60 => 20,  55 => 19,  53 => 18,  47 => 14,  44 => 13,  39 => 12,  35 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
