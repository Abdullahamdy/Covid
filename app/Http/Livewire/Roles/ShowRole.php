<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class ShowRole extends Component
{
    public $role,
    $rolePermissions;
    public function mount($role_id){
        
        $this->role = Role::find($role_id);
      
        $this->rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        ->where("role_has_permissions.role_id",$role_id)->get();
        
        
      }
    public function render()
    {
      
        return view('livewire.roles.show-role');
    }
  
}
