<?php

namespace App\Http\Livewire\Floors;

use App\Models\Floor;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DeleteFloor extends Component
{
    public $floor;
    public function mount($floor_id){
        $this->floor =  Floor::find($floor_id);
        $this->floor = $this->floor->toArray();
    }
    public function render()
    {
        return view('livewire.floors.delete-floor');
    }
    public function delete(){
        DB::table("floors")->where('id',$this->floor['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
