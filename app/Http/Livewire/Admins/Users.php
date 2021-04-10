<?php

namespace App\Http\Livewire\Admins;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $name = "joe";

    public function save($id)
    {
        dd($id);
    }
    public function create()
    {
        dd("in create");
    }
    public function render()
    {
        return view('livewire.admins.users', [
            'users' => User::paginate(5),
            'roles' => Role::all(),
        ]);
    }
}