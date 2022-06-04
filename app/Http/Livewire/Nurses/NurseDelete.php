<?php

namespace App\Http\Livewire\Nurses;
use App\Models\Nurse;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class NurseDelete extends Component
{
    public $nurse;
    public function mount($nurse_id){
        $this->nurse =  Nurse::find($nurse_id);
        $this->nurse = $this->nurse->toArray();
    }
    public function render()
    {
        return view('livewire.nurses.nurse-delete');
    }
    public function delete(){
        DB::table("nurses")->where('id',$this->nurse['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
