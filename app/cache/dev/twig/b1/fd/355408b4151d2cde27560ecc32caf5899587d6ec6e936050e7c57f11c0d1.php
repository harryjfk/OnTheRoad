<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b1fd355408b4151d2cde27560ecc32caf5899587d6ec6e936050e7c57f11c0d1 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  68 => 14,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  40 => 8,  56 => 9,  52 => 21,  32 => 12,  26 => 5,  81 => 34,  73 => 31,  64 => 12,  51 => 15,  49 => 19,  43 => 8,  37 => 12,  19 => 1,  87 => 20,  82 => 16,  79 => 18,  75 => 17,  72 => 16,  66 => 15,  61 => 7,  58 => 22,  44 => 10,  35 => 4,  33 => 10,  29 => 5,  23 => 1,  80 => 19,  77 => 15,  71 => 24,  69 => 25,  62 => 23,  60 => 23,  55 => 13,  53 => 5,  47 => 32,  42 => 14,  39 => 6,  36 => 7,  30 => 3,  31 => 5,  28 => 8,);
    }
}
