<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // comments
        if (preg_match('#^/(?P<locale>[^/]++)/comments$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::IndexFrontAction',));
        }

        // newcomment
        if (preg_match('#^/(?P<locale>[^/]++)/comments/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newcomment')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::NewFrontAction',));
        }

        // viewcomment
        if (preg_match('#^/(?P<locale>[^/]++)/comments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewcomment')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::ViewFrontAction',));
        }

        // tcomment
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::indexAction',));
        }

        // tcomment_show
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::showAction',));
        }

        // tcomment_new
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::newAction',));
        }

        // tcomment_create
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tcomment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::createAction',));
        }
        not_tcomment_create:

        // tcomment_edit
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::editAction',));
        }

        // tcomment_update
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_tcomment_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::updateAction',));
        }
        not_tcomment_update:

        // tcomment_delete
        if (preg_match('#^/(?P<locale>[^/]++)/admin/comment/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_tcomment_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::deleteAction',));
        }
        not_tcomment_delete:

        // trips
        if (preg_match('#^/(?P<locale>[^/]++)/trips$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trips')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::IndexFrontAction',));
        }

        // trealtrip
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'trealtrip');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::indexAction',));
        }

        // trealtrip_show
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::showAction',));
        }

        // trealtrip_new
        if (preg_match('#^/(?P<locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::newAction',));
        }

        // trealtrip_create
        if (preg_match('#^/(?P<locale>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_trealtrip_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::createAction',));
        }
        not_trealtrip_create:

        // trealtrip_edit
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::editAction',));
        }

        // trealtrip_update
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_trealtrip_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::updateAction',));
        }
        not_trealtrip_update:

        // trealtrip_delete
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_trealtrip_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::deleteAction',));
        }
        not_trealtrip_delete:

        // trealtripdesc
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'trealtripdesc');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::indexAction',));
        }

        // trealtripdesc_show
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::showAction',));
        }

        // trealtripdesc_new
        if (preg_match('#^/(?P<locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::newAction',));
        }

        // trealtripdesc_create
        if (preg_match('#^/(?P<locale>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_trealtripdesc_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::createAction',));
        }
        not_trealtripdesc_create:

        // trealtripdesc_edit
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::editAction',));
        }

        // trealtripdesc_update
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_trealtripdesc_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::updateAction',));
        }
        not_trealtripdesc_update:

        // trealtripdesc_delete
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_trealtripdesc_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::deleteAction',));
        }
        not_trealtripdesc_delete:

        // ttourpolo
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::indexAction',));
        }

        // ttourpolo_show
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::showAction',));
        }

        // ttourpolo_new
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::newAction',));
        }

        // ttourpolo_create
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ttourpolo_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::createAction',));
        }
        not_ttourpolo_create:

        // ttourpolo_edit
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::editAction',));
        }

        // ttourpolo_update
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ttourpolo_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::updateAction',));
        }
        not_ttourpolo_update:

        // ttourpolo_delete
        if (preg_match('#^/(?P<locale>[^/]++)/admin/tourpolo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ttourpolo_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::deleteAction',));
        }
        not_ttourpolo_delete:

        // ttourpoloimages
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ttourpoloimages');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::indexAction',));
        }

        // ttourpoloimages_show
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::showAction',));
        }

        // ttourpoloimages_new
        if (preg_match('#^/(?P<locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::newAction',));
        }

        // ttourpoloimages_create
        if (preg_match('#^/(?P<locale>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ttourpoloimages_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::createAction',));
        }
        not_ttourpoloimages_create:

        // ttourpoloimages_edit
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::editAction',));
        }

        // ttourpoloimages_update
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ttourpoloimages_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::updateAction',));
        }
        not_ttourpoloimages_update:

        // ttourpoloimages_delete
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ttourpoloimages_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::deleteAction',));
        }
        not_ttourpoloimages_delete:

        // ttrip
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::indexAction',));
        }

        // ttrip_show
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::showAction',));
        }

        // ttrip_new
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::newAction',));
        }

        // ttrip_create
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ttrip_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::createAction',));
        }
        not_ttrip_create:

        // ttrip_edit
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::editAction',));
        }

        // ttrip_update
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ttrip_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::updateAction',));
        }
        not_ttrip_update:

        // ttrip_delete
        if (preg_match('#^/(?P<locale>[^/]++)/admin/trip/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ttrip_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::deleteAction',));
        }
        not_ttrip_delete:

        // ttripdesc
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ttripdesc');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::indexAction',));
        }

        // ttripdesc_show
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::showAction',));
        }

        // ttripdesc_new
        if (preg_match('#^/(?P<locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::newAction',));
        }

        // ttripdesc_create
        if (preg_match('#^/(?P<locale>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ttripdesc_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::createAction',));
        }
        not_ttripdesc_create:

        // ttripdesc_edit
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::editAction',));
        }

        // ttripdesc_update
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ttripdesc_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::updateAction',));
        }
        not_ttripdesc_update:

        // ttripdesc_delete
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ttripdesc_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::deleteAction',));
        }
        not_ttripdesc_delete:

        // tuser
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tuser');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::indexAction',));
        }

        // tuser_show
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::showAction',));
        }

        // tuser_new
        if (preg_match('#^/(?P<locale>[^/]++)/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_new')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::newAction',));
        }

        // tuser_create
        if (preg_match('#^/(?P<locale>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tuser_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_create')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::createAction',));
        }
        not_tuser_create:

        // tuser_edit
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::editAction',));
        }

        // tuser_update
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_tuser_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::updateAction',));
        }
        not_tuser_update:

        // tuser_delete
        if (preg_match('#^/(?P<locale>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_tuser_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::deleteAction',));
        }
        not_tuser_delete:

        // adminindex
        if (preg_match('#^/(?P<locale>[^/]++)/admin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminindex')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\AdminController::indexAction',));
        }

        // index
        if (preg_match('#^/(?P<locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\DefaultController::indexAction',  'locale' => 'en',));
        }

        // login2
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::loginAction',  '_route' => 'login2',);
        }

        // login
        if (preg_match('#^/(?P<locale>[^/]++)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::loginAction',));
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // check
        if ($pathinfo === '/check') {
            return array('_route' => 'check');
        }

        // register
        if (preg_match('#^/(?P<locale>[^/]++)/register$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'register')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::registerAction',));
        }

        // profile
        if (preg_match('#^/(?P<locale>[^/]++)/profile$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::profileAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
