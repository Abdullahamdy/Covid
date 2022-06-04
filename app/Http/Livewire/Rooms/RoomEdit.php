<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Floor;
use App\Models\Room;
use Livewire\Component;

class RoomEdit extends Component
{

    public $room;
        public function mount($room_id){
          $this->room =  Room::find($room_id);
          $this->room = $this->room->toArray();
        }
        public function render()
        {
            return view('livewire.rooms.room-edit',[
                'floors'=>Floor::all(),
            ]);
        }

        public function update(){
            $data = $this->Validate([
                'room.room_number'=>'required',
                'room.floor_id'=>'required',
            ]);
            $upcat = Room::find($this->room['id']);
            $upcat->update($data['room']);
            $this->dispatchBrowserEvent('close-modal');
            $this->emit('ActionrefreshUsersList');

        }

    }




