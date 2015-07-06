<?php

namespace RoleProxy;

class Proxy
{
    private $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public function __get($name)
    {
        return $this->entity->{$name};
    }

    function __set($name, $value)
    {
        $this->entity->{$name} = $value;
    }
}
