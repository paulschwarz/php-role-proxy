<?php

namespace example\Role\User;

use example\Entity\User;
use RoleProxy\Proxy;

class Friend extends Proxy
{
    protected $readable = [
        'name',
    ];

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
