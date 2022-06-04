<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $user = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.users.users',[
            'users'=>User::paginate(5),
        ])->layout('layout.master');;

    }
}
