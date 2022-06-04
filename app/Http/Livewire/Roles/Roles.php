<?php

namespace App\Http\Livewire\Roles;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    // public $roles = [];
    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }

    public function render()
    {
        $roles = Role::orderBy('id','DESC')->get();
        return view('livewire.roles.roles',compact('roles'))->layout('layout.master');
    }
}
