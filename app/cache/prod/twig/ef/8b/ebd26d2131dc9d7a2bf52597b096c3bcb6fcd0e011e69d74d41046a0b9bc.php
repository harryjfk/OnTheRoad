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
        echo "<div class=\"row\">
    <div class=\"col-xs-8 col-md-11\">

    </div>
    <div class=\"col-xs-2 col-md-1\">
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <a  ";
        // line 8
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 9
            echo "                        href=\"";
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\">Perfil

                    ";
        } else {
            // line 12
            echo "                        href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Iniciar Sesion
                    ";
        }
        // line 14
        echo "                </a>

            </div>
            <div class=\"col-xs-6\">
              <a  ";
        // line 18
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 19
            echo "                      href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Cerrar Sesion

                ";
        } else {
            // line 22
            echo "                    href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Registrar
                ";
        }
        // line 24
        echo "              </a>
            </div>
        </div>
    </div>
</div>";
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
        return array (  64 => 24,  51 => 19,  49 => 18,  43 => 14,  37 => 12,  19 => 1,  87 => 17,  82 => 16,  79 => 15,  75 => 14,  72 => 13,  66 => 8,  61 => 7,  58 => 22,  44 => 15,  35 => 10,  33 => 6,  29 => 5,  23 => 1,  80 => 16,  77 => 15,  71 => 24,  69 => 23,  62 => 18,  60 => 15,  53 => 5,  47 => 32,  42 => 13,  39 => 4,  36 => 3,  30 => 9,  55 => 12,  40 => 7,  34 => 5,  31 => 4,  28 => 8,);
    }
}
