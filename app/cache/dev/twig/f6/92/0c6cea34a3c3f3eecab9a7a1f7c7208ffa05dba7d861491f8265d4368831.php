<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_f6920c6cea34a3c3f3eecab9a7a1f7c7208ffa05dba7d861491f8265d4368831 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  68 => 14,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  40 => 8,  56 => 9,  52 => 21,  32 => 12,  26 => 3,  81 => 34,  73 => 31,  64 => 12,  51 => 12,  49 => 19,  43 => 8,  37 => 12,  19 => 1,  87 => 20,  82 => 16,  79 => 18,  75 => 17,  72 => 16,  66 => 15,  61 => 7,  58 => 22,  44 => 10,  35 => 4,  33 => 5,  29 => 5,  23 => 1,  80 => 19,  77 => 15,  71 => 24,  69 => 25,  62 => 23,  60 => 23,  55 => 13,  53 => 5,  47 => 32,  42 => 13,  39 => 6,  36 => 7,  30 => 3,  31 => 5,  28 => 8,);
    }
}
