<?php

namespace App\Http\Livewire\Floors;

use App\Models\Floor;
use Livewire\Component;

class EditFloor extends Component
{
    public $floor;
    public function mount($floor_id){
        $this->floor = Floor::find($floor_id);
        $this->floor = $this->floor->toArray();
    }
    public function render()
    {
        return view('livewire.floors.edit-floor');
    }
    public function update(){
        $data = $this->validate([
            'floor.floor_number'=>'required|integer',
            'floor.number_of_rooms'=>'required|integer',
        ]);
        $upcat = Floor::find($this->floor['id']);
        $upcat->update($data['floor']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
