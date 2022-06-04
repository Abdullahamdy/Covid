<?php

namespace App\Http\Livewire\FeelingContagious;

use App\Models\FeelingContagious;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class FeelingContagiouDelete extends Component
{
    public $felling;
    public function mount($felling_id)
    {
        $this->felling =  FeelingContagious::find($felling_id);
        $this->felling = $this->felling->toArray();

    }
    public function render()
    {
        return view('livewire.feeling-contagious.feeling-contagiou-delete');
    }
    public function delete(){
        DB::table("feeling_contagiouses")->where('id',$this->felling['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
