<?php

namespace App\Http\Livewire\InfectedPeoples;

use App\Models\InfectedPeople;
use Livewire\Component;

class InfectedPeopleCreate extends Component
{
  
    public $infected =[];

    public function render()
    {
        return view('livewire.infected-peoples.infected-people-create');
    }

    protected $listeners = [
        'saved'=>'$refresh'
    ];


    public function store(){
        $data = $this->Validate([
            'infected.tittle'=>'required|string|max:255',
            'infected.text'=>'required|string|max:1500',
        ]);



         InfectedPeople::create($data['infected']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->infected = [];
    }
}
