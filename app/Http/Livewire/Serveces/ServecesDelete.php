<?php

namespace App\Http\Livewire\Serveces;

use App\Models\Servece;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ServecesDelete extends Component
{

    public $servece;
    public function mount($servece_id)
    {
        $this->servece =  Servece::find($servece_id);
        $this->servece = $this->servece->toArray();

    }
    public function render()
    {
        return view('livewire.serveces.serveces-delete');
    }
    public function delete(){
        DB::table("serveces")->where('id',$this->servece['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
