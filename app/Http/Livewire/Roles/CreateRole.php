<?php

namespace App\Http\Livewire\Roles;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Livewire\Component;
use Spatie\Permission\Models\Role;
class CreateRole extends Component
{
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public $roles = [];
    public $permession=[];
    public function render()
    {
        $permission = Permission::get();
        return view('livewire.roles.create-role',compact('permission'));
    }

    public function store(Request $request){

    $data = $this->Validate([
        'roles.name'=>'required',
        'roles.permission.*'=>'required',

    ]);



    $roles = Role::create($data['roles']);
    $roles->syncPermissions($this->permession);
    $this->emit('ActionrefreshUsersList');
    $this->dispatchBrowserEvent('close-modal');
    $this->roles = [];
}


}
