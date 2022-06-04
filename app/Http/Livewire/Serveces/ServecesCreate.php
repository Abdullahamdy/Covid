<?php

namespace App\Http\Livewire\Serveces;

use Livewire\Component;
use App\Models\Servece;
class ServecesCreate extends Component
{

    public function render()
    {
        return view('livewire.serveces.serveces-create',[
            'serveces'=>Servece::paginate(5),
        ]);
    }

    public $servece =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];


    public function store(){
        $data = $this->Validate([
            'servece.tittle'=>'required|string|max:255',
            'servece.text'=>'required|string|max:1500',
        ]);



         Servece::create($data['servece']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->servece = [];
    }

}
