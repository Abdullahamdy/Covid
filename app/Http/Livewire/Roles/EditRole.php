<?php
namespace App\Http\Livewire\Roles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use DB;
class EditRole extends Component
{
    public $selectedUsers = [];
    public $rolePermissions = [],$permission = [],$role;

    public function mount($role_id)
    {

          $this->role =   Role::find($role_id);
          $this->rolePermissions =  $this->role->permissions()->pluck('id')->toArray();
          $this->role = $this->role->toArray();
          $this->permission = Permission::get();
          
    }


    public function render()
    {
        return view('livewire.roles.edit-role');
    }


    public function update()
    {
        $data = $this->Validate([
            'role.name'=>'required',
            'rolePermissions'=>'required',

        ]);
        $uprole = Role::find($this->role['id']);
        $uprole->update($data['role']);
        $uprole->syncPermissions($data['rolePermissions']);
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        

    }

}
