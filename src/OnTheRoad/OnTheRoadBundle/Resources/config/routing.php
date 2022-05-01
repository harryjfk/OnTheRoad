<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('on_the_road_on_the_road_homepage', new Route('/hello/{name}', array(
    '_controller' => 'OnTheRoadOnTheRoadBundle:Default:index',
)));

return $collection;
