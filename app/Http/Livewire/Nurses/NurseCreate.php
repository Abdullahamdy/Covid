<?php

namespace App\Http\Livewire\Nurses;

use App\Models\Nurse;
use Livewire\Component;

class NurseCreate extends Component
{
    public $nurse =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.nurses.nurse-create');
    }

    public function store(){
        $data = $this->Validate([
            'nurse.nurse_name'=>'required|string|max:255',
            'nurse.nurse_age'=>'required|integer|min:20|max:65',
        ]);


        $data['nurse']['is_avalible'] = true;
         Nurse::create($data['nurse']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->nurse = [];
    }
}
