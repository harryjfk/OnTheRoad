<?php

/* OnTheRoadOnTheRoadBundle:TTourpolo:new.html.twig */
class __TwigTemplate_35697867ddfdad82130f06d0069db9e4a6822ba59942f8f8a1d2b1d95e27a6f0 extends Twig_Template
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
        echo "<h1>Create new polo</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    <div class=\"row\">

        <div class=\"col-xs-8\">
            <div class=\"mappanel\">
                <div id=\"map\" class=\"map\"></div>
            </div>
        </div>
        <div class=\"col-xs-4\">
            <h3>Imagenes</h3>

            <div class=\"thumbnail\">
                <img data-src=\"holder.js/100%x180\" alt=\"...\">
            </div>
        </div>
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ttourpolo", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
    }

    // line 34
    public function block_additionalscripts($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-mousewheel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/jvectormap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-shape-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-image-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-text-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-image-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map-object.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/region.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/marker.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vector-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/simple-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/ordinal-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/numeric-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/color-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/legend.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/data-series.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/proj.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.path.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery.fancymap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/list.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/resizer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/events.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap-cuba-all.js"), "html", null, true);
        echo "\"></script>

    <script>
        //  \$(function(){
        var markerData = {};
        var map = new jvm.Map({
                    container: \$('.map'),
                    map: 'cuba',
                    markers: {},

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


        \$('#map').click(function (e) {
            //  alert('a');


            var x = e.pageX - map.container.offset().left,
                    y = e.pageY - map.container.offset().top,
                    latLng = map.pointToLatLng(x, y),
                    targetCls = \$(e.target).attr('class');

            if (latLng && (!targetCls || targetCls.indexOf('jvectormap-marker') === -1)) {
                map.markersCoords[map.markerIndex] = latLng;
                map.clearSelectedMarkers();
                map.addMarker(0, {latLng: [latLng.lat, latLng.lng], name: 'Actual'});
                //  markerIndex += 1;
                ontheroad_ontheroadbundle_ttourpolo_datapolo.value = '['+latLng.lat+',' +latLng.lng+']';
            }
        });
        //   });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OnTheRoadOnTheRoadBundle:TTourpolo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 81,  242 => 80,  238 => 79,  233 => 77,  229 => 76,  225 => 75,  221 => 74,  217 => 73,  213 => 72,  209 => 71,  205 => 70,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  180 => 63,  176 => 62,  172 => 61,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  105 => 42,  101 => 41,  97 => 40,  92 => 38,  87 => 36,  82 => 35,  79 => 34,  69 => 27,  48 => 9,  44 => 7,  41 => 6,  33 => 3,  30 => 2,);
    }
}
