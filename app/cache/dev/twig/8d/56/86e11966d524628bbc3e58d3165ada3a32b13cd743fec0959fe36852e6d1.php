<?php

/* OnTheRoadOnTheRoadBundle:TTourpolo:edit.html.twig */
class __TwigTemplate_8d5686e11966d524628bbc3e58d3165ada3a32b13cd743fec0959fe36852e6d1 extends Twig_Template
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
        echo "<h1>Edit polo</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    <div class=\"mappanel\">
        <div id=\"map\" class=\"map\"></div>
    </div>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ttourpolo", array("locale" => (isset($context["customlocale"]) ? $context["customlocale"] : $this->getContext($context, "customlocale")))), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    // line 22
    public function block_additionalscripts($context, array $blocks = array())
    {
        // line 23
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-mousewheel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/jvectormap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/abstract-shape-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-image-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg-text-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-group-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-canvas-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-shape-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-path-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-circle-element.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vml-image-element.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map-object.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/region.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/marker.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/vector-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/simple-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/ordinal-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/numeric-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/color-scale.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/legend.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/data-series.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/proj.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/svg/svg.path.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery.fancymap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/list.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/resizer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/events.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ontheroad/js/jquery-jvectormap-cuba-all.js"), "html", null, true);
        echo "\"></script>

    <script>
        //  \$(function(){
        var markerData = {};
        var map = new jvm.Map({
                    container: \$('.map'),
                    map: 'cuba',
                    markers: { latLng:";
        // line 77
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
        \$('#map').click(function (e) {
            //  alert('a');


            var x = e.pageX - map.container.offset().left,
                    y = e.pageY - map.container.offset().top,
                    latLng = map.pointToLatLng(x, y),
                    targetCls = \$(e.target).attr('class');

            if (latLng && (!targetCls || targetCls.indexOf('jvectormap-marker') === -1)) {
                map.markersCoords[map.markerIndex] = latLng;
                map.removeAllMarkers();
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
        return "OnTheRoadOnTheRoadBundle:TTourpolo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 77,  238 => 69,  234 => 68,  230 => 67,  225 => 65,  221 => 64,  217 => 63,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  197 => 58,  193 => 57,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  172 => 51,  168 => 50,  164 => 49,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  97 => 30,  93 => 29,  89 => 28,  84 => 26,  79 => 24,  74 => 23,  71 => 22,  64 => 19,  57 => 15,  48 => 9,  44 => 7,  41 => 6,  33 => 3,  30 => 2,);
    }
}
