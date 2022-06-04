<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use DB;
use Spatie\Permission\Models\Role;
class DeleteRole extends Component
{
    public $role;
    public function mount($role_id){
        $this->role =   Role::find($role_id);
        $this->role = $this->role->toArray();
      
    }
    public function render()
    {
        return view('livewire.roles.delete-role');
    }
    public function delete(){
        DB::table("roles")->where('id',$this->role['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
    }
}
