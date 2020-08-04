<?php

namespace Lite\DataManager;

class Repository
{
    private $objects = [];

    public function __construct($objects)
    {
        $this->objects = $objects;
    }

    public function getRepository()
    {
        return $this->objects;
    }
}
