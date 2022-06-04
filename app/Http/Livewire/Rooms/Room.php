<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room as ModelsRoom;
use Livewire\Component;
use Livewire\WithPagination;
class Room extends Component
{

    use WithPagination;
protected $paginationTheme = 'bootstrap';

    public $room = [];
    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.rooms.room',[
            'allrooms'=> ModelsRoom::paginate(5),

        ])->layout('layout.master');
    }
}
