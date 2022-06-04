<?php

namespace App\Http\Livewire\Serveces;

use App\Models\Servece;
use Livewire\Component;

class ServecesEdit extends Component
{
    public function render()
    {
        return view('livewire.serveces.serveces-edit');
    }

    public $servece;
    public function mount($servece_id){
        $this->servece = Servece::find($servece_id);
        $this->servece = $this->servece->toArray();
    }
  
    public function update(){
        $data = $this->validate([
            'servece.tittle'=>'required|string|max:255',
            'servece.text'=>'required|string|max:65',
        ]);
        $upcat = Servece::find($this->servece['id']);
        $upcat->update($data['servece']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
