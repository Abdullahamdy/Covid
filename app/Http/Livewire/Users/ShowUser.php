<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $user;
    public function mount($user_id){
        $this->user = User::find($user_id);
    }
    public function render()
    {
        return view('livewire.users.show-user');
    }
}

