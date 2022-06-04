<?php

namespace App\Http\Livewire\FeelingContagious;

use App\Models\FeelingContagious;
use Livewire\Component;

class FeelingContagiouEdit extends Component
{
    public $felling;
    public function mount($felling_id){
        $this->felling = FeelingContagious::find($felling_id);
        $this->felling = $this->felling->toArray();
    }

    public function render()
    {
        return view('livewire.feeling-contagious.feeling-contagiou-edit');
    }
    public function update(){
        $data = $this->validate([
            'felling.tittle'=>'required|string|max:255',
            'felling.text'=>'required|string|max:65',
        ]);
        $upcat = FeelingContagious::find($this->felling['id']);
        $upcat->update($data['felling']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
