<?php

namespace App\Http\Livewire\Admins;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $currentUserId;
    public $userName;
    public $userPassword;
    public $userEmail;
    public $userRole = 2;
    public $userPermissions = [];

    protected $rules = [
        'userName' => 'required|min:6',
        'userEmail' => 'required|email|unique:users,email',
        'userPassword' => 'required|min:3',
        'userRole' => 'required',
    ];

    /**
     * used to Uncheck the checked permissions when updating
     *
     * @param  mixed $permissionId
     * @return void
     */
    public function permissionChecked($permissionId)
    {
        if (!$this->currentUserId) {
            return;
        }
        if (in_array($permissionId, $this->userPermissions, true)) {
            if (($key = array_search($permissionId, $this->userPermissions)) !== false) {
                array_splice($this->userPermissions, $key, 1);
            }
        }
    }
    public function updated($feilds)
    {
        $this->validateOnly($feilds, [
            'userName' => 'required|min:5',
            'userEmail' => 'required|email',
            'userPassword' => 'required|min:6',
        ]);
    }

    public function storeModal()
    {
        $this->resetValidation();
        $this->reset();
    }
    public function store()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->userName,
            'email' => $this->userEmail,
            'password' => bcrypt($this->userPassword),
        ]);
        $user->attachRole($this->userRole);
        $user->attachPermissions($this->userPermissions);
        $this->dispatchBrowserEvent('close-modal');
    }
    public function view()
    {
        dd("in view");
    }
    public function updateModal($id)
    {
        $this->resetValidation();
        $this->currentUserId = $id;
        $user = User::find($id);
        $this->userName = $user->name;
        $this->userEmail = $user->email;
        $this->userRole = $user->roles()->first()->id;
        $this->userPermissions = $user->permissions()->pluck('id')->toArray();
    }
    public function update()
    {
        // dd($this->userPermissions);
        $data = $this->validate([
            'userName' => 'sometimes|min:6',
            'userEmail' => 'sometimes|email',
            'userRole' => 'sometimes',
            'userPermissions' => 'sometimes',
        ]);
        $user = User::find($this->currentUserId);
        $user->update([
            'name' => $this->userName,
            'email' => $this->userEmail,
        ]);
        $user->detachRole($user->role);
        $user->attachRole($this->userRole);
        $user->detachPermissions($user->permissions);
        $user->attachPermissions($this->userPermissions);
        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.admins.users', [
            'users' => User::paginate(5),
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }
}