<?php

namespace App\Http\Livewire\FeelingContagious;

use App\Models\FeelingContagious;
use Livewire\Component;

class FeelingContagiouCreate extends Component
{
    public $felling =[];

    public function render()
    {
        return view('livewire.feeling-contagious.feeling-contagiou-create');
    }

    protected $listeners = [
        'saved'=>'$refresh'
    ];


    public function store(){
        $data = $this->Validate([
            'felling.tittle'=>'required|string|max:255',
            'felling.text'=>'required|string|max:1500',
        ]);



         FeelingContagious::create($data['felling']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->felling = [];
    }
}
