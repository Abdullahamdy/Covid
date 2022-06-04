<?php

namespace App\Http\Livewire\Nurses;

use App\Models\Nurse as ModelsNurse;
use Livewire\Component;

class Nurse extends Component
{
    public $nurse = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.nurses.nurse',[
            'allNurses'=>ModelsNurse::paginate(5),
        ])->layout('layout.master');

    }
}
