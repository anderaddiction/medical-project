<?php

namespace App\Presenters\Roles;

use App\Models\Roles\Role;

class RolePresenter
{

    protected $role;

    function __construct(Role $role)
    {
        $this->role = $role;
    }
}
