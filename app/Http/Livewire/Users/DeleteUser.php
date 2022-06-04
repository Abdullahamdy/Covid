<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use DB;
class DeleteUser extends Component
{
    public $user ;
    public function mount($user_id){
       $this->user =  User::find($user_id);
       $this->user = $this->user->toArray();


    }
    public function render()
    {
        return view('livewire.users.delete-user');
    }
    public function delete(){
        DB::table("users")->where('id',$this->user['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');

    }
}
