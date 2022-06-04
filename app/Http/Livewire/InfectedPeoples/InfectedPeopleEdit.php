<?php

namespace App\Http\Livewire\InfectedPeoples;

use App\Models\InfectedPeople;
use Livewire\Component;

class InfectedPeopleEdit extends Component
{

    public $infected;
    public function mount($infected_id){
        $this->infected  = InfectedPeople::find($infected_id);
        $this->infected = $this->infected->toArray();
    }

    public function render()
    {
        return view('livewire.infected-peoples.infected-people-edit');
    }
    public function update(){
        $data = $this->validate([
            'infected.tittle'=>'required|string|max:255',
            'infected.text'=>'required|string|max:65',
        ]);
        $upcat = InfectedPeople::find($this->infected['id']);
        $upcat->update($data['infected']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }

}
