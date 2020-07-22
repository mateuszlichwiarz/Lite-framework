<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('home', new Route('/home/{page}', [
    'page' => '1',
    'name' => 'MVC',
    '_controller' => 'Home\Controller\Home::index',
    ]));

return $routes;