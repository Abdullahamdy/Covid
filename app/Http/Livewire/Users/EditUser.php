<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{
    public $user;
    public function mount($user_id){
        $this->user = User::find($user_id);
        $this->user['roles_name'] = $this->user->roles->pluck('name');
        $this->user = $this->user->toArray();


    }
    public function render()
    {
        return view('livewire.users.edit-user',[
            'roles'=>Role::all(),

        ]);
    }
    public function update()
    {
        $data = $this->validate([
            'user.name' => 'required',
            'user.email' => 'required',
            // 'user.password' => 'required',
            'user.roles_name' => 'required'
        ]);        
        if(empty($data['user']['password']) or $data['user']['password']==""){
           unset($data['user']['password']); 
        }else{
            $data['user']['password'] = Hash::make($data['user']['password']);
        }
        $upuser = User::find($this->user['id']);
        $upuser->syncRoles($data['user']['roles_name']);
        $upuser->update($data['user']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
       
       
    }
}
