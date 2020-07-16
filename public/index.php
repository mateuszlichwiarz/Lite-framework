<?php

require_once '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

//$controller = $request->get('controller', 'home');

$path = $request->getPathInfo();

$response = new Response();

$dir = __DIR__ . '/../app/Controller/%s.php';

$map = [
    '/home' => 'home',
    '/list' => 'list',
];

if(isset($map[$path])) {
    ob_start();
    require sprintf($dir, $map[$path]);
    $response->setContent(ob_get_clean());
}else {
    $response->setStatusCode(404);
    $response->setContent("Sorry, we don't have what you looking for.");
}

$response->send();