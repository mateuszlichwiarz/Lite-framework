<?php

namespace Example\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExampleController
{
    public function indexAction(Request $request, $page)
    {
        return new Response('Hello world! Index nr. '.$page);
    }
}