<?php

namespace Lite\DataManager;

class Mapper
{
    private $keys   = [];
    private $values = [];

    public static function Generate($keys, $values)
    {
        $obj = new self($keys, $values);
        $combined = $obj->getCombine();

        return $combined;
    }

    private function getCombine(): Array
    {
        $keys = $this->keys;
        $values = $this->values;

        $i = 0;
        foreach($keys as $key)
        {
            $combined[$key] = $values[$i];
            $i++;
        }
        return $combined;
    }

    private function __construct($keys, $values)
    {
        $this->keys = $keys;
        $this->values = $values;
    }

}