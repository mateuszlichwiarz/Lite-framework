<?php

require_once '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$request = Request::createFromGlobals();
$routes = include __DIR__ . '/../app/routes.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$response = new Response();

try {
    extract($matcher->match($request->getPathInfo()), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__ . '/../app/controller/%s.php' , $_route);

    $response = new Response(ob_get_clean());
} catch(Routing\Exception\RouteNotFoundException $e) {
    $response->setStatusCode(404);
    $response->setContent($e->getMessage());
} catch(Exception $e) {
    $response->setStatusCode(500);
    $response->setContent($e->getMessage());
}

$response->send();