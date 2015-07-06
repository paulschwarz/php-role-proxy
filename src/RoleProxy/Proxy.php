<?php

namespace RoleProxy;

class Proxy
{
    private $entity;

    protected $readable = [];

    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public function __get($name)
    {
        return in_array($name, $this->readable) ? $this->entity->{$name} : NULL;
    }

    public function __set($name, $value)
    {
        $this->entity->{$name} = $value;
    }

    public function getReadable()
    {
        return $this->readable;
    }
}
