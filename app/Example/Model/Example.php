<?php

namespace Example\Model;

class Example extends DataProvider
{
    public $name;
    public $desc;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setDesc(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }
}