<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;
class CreateUser extends Component
{
    public $user =[];
    public $roles_name = [];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        
        return view('livewire.users.create-user',[
            'roles'=>Role::all(),
        ]);

    }

    public function store(){


        $data = $this->Validate([
            'user.name'=>'required',
            'user.email'=>'required|unique:users,email',
            'user.password'=>'required',
            'user.roles_name'=>'required',

        ]);
        
        
      
        $data['user']['password'] = Hash::make($data['user']['password']);
        $user = User::create($data['user']);
        
        $user->syncRoles($data['user']['roles_name']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->user = [];
        // $this->reset();
    }

  
}
