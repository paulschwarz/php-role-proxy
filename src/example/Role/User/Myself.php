<?php

namespace example\Role\User;

use example\Entity\User;
use RoleProxy\RoleProxy;

class Myself extends RoleProxy
{
    protected $readable = [
        'name',
        'password',
    ];

    protected $writeable = [
        'name',
        'password',
    ];

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
