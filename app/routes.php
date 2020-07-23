<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('home', new Route('/home/{page}', [
    'page' => '1',
    '_controller' => 'Home\Controller\HomeController::indexAction',
    ]));

return $routes;