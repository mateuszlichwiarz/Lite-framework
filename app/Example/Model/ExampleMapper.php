<?php

namespace Example\Model;

use InvalidArgumentException;

use Example\Model\StorageAdapter;
use Example\Model\Example;

class ExampleMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    public function findById(int $id): Example
    {
        $result = $this->adapter->find($id);

        if($result === null)
        {
            throw new InvalidArgumentException("Example #$id not found");
        }

        return $this->mapRowToExample($result);
    }

    private function mapRowToExample(array $row): Example
    {
        return Example::fromState($row);
    }
}