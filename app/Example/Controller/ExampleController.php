<?php

namespace Example\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Example\Model\Example;
use Example\Model\ExampleMapper;
use Example\Model\StorageAdapter;

use Lite\DataManager\SQL;

class ExampleController
{
    public function indexAction(Request $request, $page)
    {
        $storage = new StorageAdapter([
            0 => ['name' => 'Mati',
                  'desc' => 'Great_power']
        ]);

        
        $result = SQL::selectAll();
        print_r($result);

        //TO DO
        //Create class converting SQL to objects

        return new Response('Hello world! <br> chuj'
        );
    }
}