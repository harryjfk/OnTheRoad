<?php

/* OnTheRoadOnTheRoadBundle:TTourpolo:show.html.twig */
class __TwigTemplate_8d2b43423554ce52dee886e68cd629e534bdddefb78667685ad45f12d55ab9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnTheRoadOnTheRoadBundle::adminlayout.html.twig");

        $this->blocks = array(
            'adstylesheets' => array($this, 'block_adstylesheets'),
            'container' => array($this, 'block_container'),
            'additionalscripts' => array($this, 'block_additionalscripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnTheRoadOnTheRoadBundle::adminlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_adstylesheets($context, array $blocks = array())
    {
        // line 3
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/css/jquery-jvectormap.css"), "html", null, true);
        echo "\"/>

  ";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Polos</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namepolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datapolo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descpolo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

            <div class=\"mappanel\">
                <div id=\"map\" class=\"map\"></div>
            </div>


        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ttourpolo", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ttourpolo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    // line 49
    public function block_additionalscripts($context, array $blocks = array())
    {
        // line 50
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-mousewheel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/jvectormap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-shape-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-image-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-text-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-image-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map-object.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/region.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/marker.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vector-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/simple-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/ordinal-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/numeric-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/color-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/legend.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/data-series.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/proj.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.path.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery.fancymap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/list.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/resizer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/events.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap-cuba-all.js"), "html", null, true);
        echo "\"></script>

    <script>
        //  \$(function(){
        var markerData = {};
        var map = new jvm.Map({
                    container: \$('.map'),
                    map: 'cuba',
                    markers: { latLng:";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datapolo"), "html", null, true);
        echo " ,name:\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namepolo"), "html", null, true);
        echo "\" ,item:\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" },

                    backgroundColor: 'gray',
                    markerStyle: {
                        initial: {
                            fill: 'blue'
                        }
                    }, onMarkerTipShow: function (e, tip, code) {
                        map.tip.text(map.markers[code].name);
                    },
                    onMarkerClick: function (e, code) {

                        /*    map.removeMarkers([code]); */
                        //map.tip.hide();

                    }
                }
        );


        //   });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:TTourpolo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 104,  277 => 96,  273 => 95,  269 => 94,  264 => 92,  260 => 91,  256 => 90,  252 => 89,  248 => 88,  244 => 87,  240 => 86,  236 => 85,  232 => 84,  228 => 83,  224 => 82,  220 => 81,  216 => 80,  211 => 78,  207 => 77,  203 => 76,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  182 => 70,  178 => 69,  174 => 68,  169 => 66,  165 => 65,  161 => 64,  157 => 63,  153 => 62,  149 => 61,  145 => 60,  141 => 59,  136 => 57,  132 => 56,  128 => 55,  123 => 53,  118 => 51,  113 => 50,  110 => 49,  103 => 46,  96 => 42,  88 => 37,  73 => 25,  66 => 21,  59 => 17,  52 => 13,  44 => 7,  41 => 6,  33 => 3,  30 => 2,);
    }
}
