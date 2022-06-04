<?php

namespace App\Http\Livewire\InfectedPeoples;

use Livewire\Component;
use App\Models\InfectedPeople;
use Illuminate\Support\Facades\DB;

class InfectedPeopleDelete extends Component
{

    public $infected;
    public function mount($infected_id)
    {
        $this->infected =  InfectedPeople::find($infected_id);
        $this->infected = $this->infected->toArray();

    }
    public function render()
    {
        return view('livewire.infected-peoples.infected-people-delete');
    }
    public function delete(){
        DB::table("infected_people")->where('id',$this->infected['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
