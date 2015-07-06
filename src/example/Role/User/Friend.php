<?php

namespace example\Role\User;

use example\Entity\User;
use RoleProxy\RoleProxy;

class Friend extends RoleProxy
{
    protected $readable = [
        'name',
    ];

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
