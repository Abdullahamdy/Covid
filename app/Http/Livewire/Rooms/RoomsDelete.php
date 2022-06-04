<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;

class RoomsDelete extends Component
{
    public  $room;
    public function mount($room_id){
      $this->room =  Room::find($room_id);
      $this->room = $this->room->toArray();
    }
    public function render()
    {
        return view('livewire.rooms.rooms-delete');
    }
    public function delete(){
        $model =  Room::find($this->room['id']);
          $model->delete();
          $this->emit('ActionrefreshUsersList');
          $this->dispatchBrowserEvent('close-modal');



      }
}
