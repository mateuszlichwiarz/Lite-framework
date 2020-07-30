<?php

namespace Example\Model;

class Example
{
    public $name;
    public $desc;

    public static function fromState(array $state): Example
    {
        return new self(
            $state['name'],
            $state['desc']
        );
    }

    public function __construct(string $name, string $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function getName(): string
    {
        return $this->name;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    }


    public function getDesc(): string
    {
        return $this->desc;
    }
}