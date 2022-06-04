<?php

namespace App\Http\Livewire\Floors;

use App\Models\Floor;
use Livewire\Component;

class CreateFloor extends Component
{
    public $floor =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.floors.create-floor');
    }

    public function store(){
        $data = $this->Validate([
            'floor.floor_number'=>'required|integer',
            'floor.number_of_rooms'=>'required|integer',

        ]);


         Floor::create($data['floor']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->floor = [];
    }
}



