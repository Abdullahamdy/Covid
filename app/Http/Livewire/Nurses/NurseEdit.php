<?php

namespace App\Http\Livewire\Nurses;

use App\Models\Nurse;
use Livewire\Component;

class NurseEdit extends Component
{
    public $nurse;
    public function mount($nurse_id){
        $this->nurse = Nurse::find($nurse_id);
        $this->nurse = $this->nurse->toArray();
    }
    public function render()
    {
        return view('livewire.nurses.nurse-edit');
    }
    public function update(){
        $data = $this->validate([
            'nurse.nurse_name'=>'required|string|max:255',
            'nurse.nurse_age'=>'required|integer|min:20|max:65',
        ]);
        $data['nurse']['is_avalible'] = true;
        $upcat = Nurse::find($this->nurse['id']);
        $upcat->update($data['nurse']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
