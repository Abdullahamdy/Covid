<?php

namespace App\Http\Livewire\Floors;

use App\Models\Floor as ModelsFloor;
use Livewire\Component;

class Floor extends Component
{
    public $floors = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.floors.floor',[
            'allFloors'=>ModelsFloor::paginate(5),
        ])->layout('layout.master');

    }
}
