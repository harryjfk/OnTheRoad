<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tcomment')) {
                // tcomment
                if (rtrim($pathinfo, '/') === '/tcomment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tcomment');
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::indexAction',  '_route' => 'tcomment',);
                }

                // tcomment_show
                if (preg_match('#^/tcomment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::showAction',));
                }

                // tcomment_new
                if ($pathinfo === '/tcomment/new') {
                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::newAction',  '_route' => 'tcomment_new',);
                }

                // tcomment_create
                if ($pathinfo === '/tcomment/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tcomment_create;
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::createAction',  '_route' => 'tcomment_create',);
                }
                not_tcomment_create:

                // tcomment_edit
                if (preg_match('#^/tcomment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::editAction',));
                }

                // tcomment_update
                if (preg_match('#^/tcomment/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tcomment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::updateAction',));
                }
                not_tcomment_update:

                // tcomment_delete
                if (preg_match('#^/tcomment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tcomment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcomment_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TCommentController::deleteAction',));
                }
                not_tcomment_delete:

            }

            if (0 === strpos($pathinfo, '/trealtrip')) {
                // trealtrip
                if (rtrim($pathinfo, '/') === '/trealtrip') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'trealtrip');
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::indexAction',  '_route' => 'trealtrip',);
                }

                // trealtrip_show
                if (preg_match('#^/trealtrip/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::showAction',));
                }

                // trealtrip_new
                if ($pathinfo === '/trealtrip/new') {
                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::newAction',  '_route' => 'trealtrip_new',);
                }

                // trealtrip_create
                if ($pathinfo === '/trealtrip/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_trealtrip_create;
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::createAction',  '_route' => 'trealtrip_create',);
                }
                not_trealtrip_create:

                // trealtrip_edit
                if (preg_match('#^/trealtrip/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::editAction',));
                }

                // trealtrip_update
                if (preg_match('#^/trealtrip/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_trealtrip_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::updateAction',));
                }
                not_trealtrip_update:

                // trealtrip_delete
                if (preg_match('#^/trealtrip/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_trealtrip_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtrip_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripController::deleteAction',));
                }
                not_trealtrip_delete:

                if (0 === strpos($pathinfo, '/trealtripdesc')) {
                    // trealtripdesc
                    if (rtrim($pathinfo, '/') === '/trealtripdesc') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'trealtripdesc');
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::indexAction',  '_route' => 'trealtripdesc',);
                    }

                    // trealtripdesc_show
                    if (preg_match('#^/trealtripdesc/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::showAction',));
                    }

                    // trealtripdesc_new
                    if ($pathinfo === '/trealtripdesc/new') {
                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::newAction',  '_route' => 'trealtripdesc_new',);
                    }

                    // trealtripdesc_create
                    if ($pathinfo === '/trealtripdesc/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_trealtripdesc_create;
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::createAction',  '_route' => 'trealtripdesc_create',);
                    }
                    not_trealtripdesc_create:

                    // trealtripdesc_edit
                    if (preg_match('#^/trealtripdesc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::editAction',));
                    }

                    // trealtripdesc_update
                    if (preg_match('#^/trealtripdesc/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_trealtripdesc_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::updateAction',));
                    }
                    not_trealtripdesc_update:

                    // trealtripdesc_delete
                    if (preg_match('#^/trealtripdesc/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_trealtripdesc_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'trealtripdesc_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TRealtripdescController::deleteAction',));
                    }
                    not_trealtripdesc_delete:

                }

            }

            if (0 === strpos($pathinfo, '/tt')) {
                if (0 === strpos($pathinfo, '/ttourpolo')) {
                    // ttourpolo
                    if (rtrim($pathinfo, '/') === '/ttourpolo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'ttourpolo');
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::indexAction',  '_route' => 'ttourpolo',);
                    }

                    // ttourpolo_show
                    if (preg_match('#^/ttourpolo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::showAction',));
                    }

                    // ttourpolo_new
                    if ($pathinfo === '/ttourpolo/new') {
                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::newAction',  '_route' => 'ttourpolo_new',);
                    }

                    // ttourpolo_create
                    if ($pathinfo === '/ttourpolo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ttourpolo_create;
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::createAction',  '_route' => 'ttourpolo_create',);
                    }
                    not_ttourpolo_create:

                    // ttourpolo_edit
                    if (preg_match('#^/ttourpolo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::editAction',));
                    }

                    // ttourpolo_update
                    if (preg_match('#^/ttourpolo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_ttourpolo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::updateAction',));
                    }
                    not_ttourpolo_update:

                    // ttourpolo_delete
                    if (preg_match('#^/ttourpolo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_ttourpolo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpolo_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloController::deleteAction',));
                    }
                    not_ttourpolo_delete:

                    if (0 === strpos($pathinfo, '/ttourpoloimages')) {
                        // ttourpoloimages
                        if (rtrim($pathinfo, '/') === '/ttourpoloimages') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'ttourpoloimages');
                            }

                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::indexAction',  '_route' => 'ttourpoloimages',);
                        }

                        // ttourpoloimages_show
                        if (preg_match('#^/ttourpoloimages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::showAction',));
                        }

                        // ttourpoloimages_new
                        if ($pathinfo === '/ttourpoloimages/new') {
                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::newAction',  '_route' => 'ttourpoloimages_new',);
                        }

                        // ttourpoloimages_create
                        if ($pathinfo === '/ttourpoloimages/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ttourpoloimages_create;
                            }

                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::createAction',  '_route' => 'ttourpoloimages_create',);
                        }
                        not_ttourpoloimages_create:

                        // ttourpoloimages_edit
                        if (preg_match('#^/ttourpoloimages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::editAction',));
                        }

                        // ttourpoloimages_update
                        if (preg_match('#^/ttourpoloimages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_ttourpoloimages_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::updateAction',));
                        }
                        not_ttourpoloimages_update:

                        // ttourpoloimages_delete
                        if (preg_match('#^/ttourpoloimages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_ttourpoloimages_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttourpoloimages_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTourpoloimagesController::deleteAction',));
                        }
                        not_ttourpoloimages_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/ttrip')) {
                    // ttrip
                    if (rtrim($pathinfo, '/') === '/ttrip') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'ttrip');
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::indexAction',  '_route' => 'ttrip',);
                    }

                    // ttrip_show
                    if (preg_match('#^/ttrip/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::showAction',));
                    }

                    // ttrip_new
                    if ($pathinfo === '/ttrip/new') {
                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::newAction',  '_route' => 'ttrip_new',);
                    }

                    // ttrip_create
                    if ($pathinfo === '/ttrip/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ttrip_create;
                        }

                        return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::createAction',  '_route' => 'ttrip_create',);
                    }
                    not_ttrip_create:

                    // ttrip_edit
                    if (preg_match('#^/ttrip/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::editAction',));
                    }

                    // ttrip_update
                    if (preg_match('#^/ttrip/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_ttrip_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::updateAction',));
                    }
                    not_ttrip_update:

                    // ttrip_delete
                    if (preg_match('#^/ttrip/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_ttrip_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttrip_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripController::deleteAction',));
                    }
                    not_ttrip_delete:

                    if (0 === strpos($pathinfo, '/ttripdesc')) {
                        // ttripdesc
                        if (rtrim($pathinfo, '/') === '/ttripdesc') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'ttripdesc');
                            }

                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::indexAction',  '_route' => 'ttripdesc',);
                        }

                        // ttripdesc_show
                        if (preg_match('#^/ttripdesc/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::showAction',));
                        }

                        // ttripdesc_new
                        if ($pathinfo === '/ttripdesc/new') {
                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::newAction',  '_route' => 'ttripdesc_new',);
                        }

                        // ttripdesc_create
                        if ($pathinfo === '/ttripdesc/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ttripdesc_create;
                            }

                            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::createAction',  '_route' => 'ttripdesc_create',);
                        }
                        not_ttripdesc_create:

                        // ttripdesc_edit
                        if (preg_match('#^/ttripdesc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::editAction',));
                        }

                        // ttripdesc_update
                        if (preg_match('#^/ttripdesc/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_ttripdesc_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::updateAction',));
                        }
                        not_ttripdesc_update:

                        // ttripdesc_delete
                        if (preg_match('#^/ttripdesc/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_ttripdesc_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ttripdesc_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TTripdescController::deleteAction',));
                        }
                        not_ttripdesc_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/tuser')) {
                // tuser
                if (rtrim($pathinfo, '/') === '/tuser') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tuser');
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::indexAction',  '_route' => 'tuser',);
                }

                // tuser_show
                if (preg_match('#^/tuser/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_show')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::showAction',));
                }

                // tuser_new
                if ($pathinfo === '/tuser/new') {
                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::newAction',  '_route' => 'tuser_new',);
                }

                // tuser_create
                if ($pathinfo === '/tuser/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tuser_create;
                    }

                    return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::createAction',  '_route' => 'tuser_create',);
                }
                not_tuser_create:

                // tuser_edit
                if (preg_match('#^/tuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_edit')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::editAction',));
                }

                // tuser_update
                if (preg_match('#^/tuser/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tuser_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_update')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::updateAction',));
                }
                not_tuser_update:

                // tuser_delete
                if (preg_match('#^/tuser/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tuser_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tuser_delete')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::deleteAction',));
                }
                not_tuser_delete:

            }

        }

        // adminindex
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\AdminController::indexAction',  '_route' => 'adminindex',);
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // check
        if ($pathinfo === '/check') {
            return array('_route' => 'check');
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\TUserController::registerAction',  '_route' => 'register',);
        }

        // route
        if (preg_match('#^/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'route')), array (  '_controller' => 'OnTheRoad\\OnTheRoadBundle\\Controller\\DefaultController::routeAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
