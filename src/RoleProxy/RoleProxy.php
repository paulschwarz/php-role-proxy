<?php

namespace RoleProxy;

class RoleProxy
{
    private $entity;

    protected
        $readable = [],
        $writeable = [];

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
        if (in_array($name, $this->writeable))
        {
            $this->entity->{$name} = $value;
        }
    }

    public function getReadable()
    {
        return $this->readable;
    }
}
