<?php

namespace Lite\DataManager;

class DataManager
{
    public $row;
    public $value;

    public static function fromState(array $state): Example
    {
        return new self(
            'name',
            'mati'
        );
    }

    public function __construct($row, $value)
    {
        $this->row;
        $this->value;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function getValue()
    {
        return $this->value;
    }
}