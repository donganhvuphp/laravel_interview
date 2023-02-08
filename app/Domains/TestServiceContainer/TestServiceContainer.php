<?php

namespace App\Domains\TestServiceContainer;

class TestServiceContainer
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
