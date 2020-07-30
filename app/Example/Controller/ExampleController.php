<?php

namespace Example\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Example\Model\Example;
use Example\Model\ExampleMapper;
use Example\Model\StorageAdapter;

class ExampleController
{
    public function indexAction(Request $request, $page)
    {
        $storage = new StorageAdapter([
            0 => ['name' => 'Mati',
                'desc' => 'Great_power'],
        ]);

        $mapper = new ExampleMapper($storage);
        $smth = $mapper->findById(0);

        $name = $smth->getName();

        //TO DO
        //Create class converting SQL to objects

        return new Response('Hello world! <br>'.
        'name: '.$name
        );
    }
}