<?php

namespace App\Http\Livewire\InfectedPeoples;

use App\Models\InfectedPeople;
use Livewire\Component;

class InfectedPeoples extends Component
{
 
    public $infected = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }

    public function render()
    {
        return view('livewire.infected-peoples.infected-peoples',[
            'allinfected'=>InfectedPeople::paginate(5),
        ])->layout('layout.master');
    }
}
