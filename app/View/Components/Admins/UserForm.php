<?php

namespace App\View\Components\admins;

use Illuminate\View\Component;

class UserForm extends Component
{
    public $roles;
    public $permissions;
    public $updating;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($roles, $permissions, $updating)
    {
        $this->roles = $roles;
        $this->permissions = $permissions;
        $this->updating = $updating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admins.user-form');
    }
}