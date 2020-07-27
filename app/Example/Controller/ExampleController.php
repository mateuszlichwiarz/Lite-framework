<?php

namespace Example\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Example\Model\Example;

class ExampleController
{
    public function indexAction(Request $request, $page)
    {
        $test0 = new Example();
        $test0->setName('Test0');
        $test0->setDesc('This_is_a_test_nr_0');

        //TO DO
        //Create class converting SQL to objects
        
        $name = $test0->getName();
        $desc = $test0->getDesc();

        return new Response('Hello world! Index nr. '.$page.
            '<br>Test name: '.$name.
            '<br>Test description: '.$desc
        );
    }
}