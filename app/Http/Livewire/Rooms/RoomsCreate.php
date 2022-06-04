<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room;
use App\Models\Floor;
use Livewire\Component;


class RoomsCreate extends Component
{

    public $room =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.rooms.rooms-create',[
            'floors'=>Floor::paginate(5),
        ]);
    }

    public function store(){
        $data = $this->Validate([
            'room.room_number'=>'required',
            'room.floor_id'=>'required',


        ]);

        $thisrecord =   Room::create($data['room']);
        $this->emit('saved');
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');


   $this->room = [];


    }
}
