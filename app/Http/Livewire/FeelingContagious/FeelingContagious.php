<?php

namespace App\Http\Livewire\FeelingContagious;

use App\Models\FeelingContagious as ModelsFeelingContagious;
use Livewire\Component;

class FeelingContagious extends Component
{
    public $felling = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }

    public function render()
    {
        return view('livewire.feeling-contagious.feeling-contagious',[
            'allfelling'=>ModelsFeelingContagious::paginate(5),
        ])->layout('layout.master');
    }
}
