<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('example', new Route('/example/{page}', [
    'page' => '1',
    '_controller' => 'Example\Controller\ExampleController::indexAction',
    ]));

return $routes;