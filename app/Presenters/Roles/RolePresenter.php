<?php

namespace App\Presenters\Roles;

use App\Models\Roles\Role;
use Illuminate\Support\Carbon;

class RolePresenter
{

    protected $role;

    function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function code()
    {
        return $this->role->code;
    }

    public function name()
    {
        return $this->role->name;
    }

    public function display_name()
    {
        return $this->role->display_name;
    }

    public function note()
    {
        return $this->role->note;
    }

    public function slug()
    {
        return $this->role->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->role->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->role->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->role->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('role.edit', $this->role) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('role.show', $this->role) . '">' . __('Show') . '</a>
                        <form action="' . route('role.destroy', $this->role) . '" method="POST">
                            ' . @csrf_field() . '
                            ' . @method_field('DELETE') . '
                            <button class="dropdown-item" type="submit">' . __('Delete') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }

    public function trash_action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('role.restore', $this->role->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}
