<?php

namespace App\Http\Livewire\Serveces;

use App\Models\Servece;
use Livewire\Component;

class Serveces extends Component
{

    public $serveces = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
 
    public function render()
    {
        return view('livewire.serveces.serveces',[
            'allserveces'=>Servece::paginate(5),
        ])->layout('layout.master');
    }
}
