<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Users extends Component
{
    public $user;

    public function render()
    {
        return view(
            'livewire.user.users'
        );
    }
}