<?php

namespace App\Http\Livewire\Doctors;

use App\Models\Doctor;
use App\Models\Specialtie;
use Livewire\Component;

class CreateDoctor extends Component
{
    public $doctor =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.doctors.create-doctor',[
            'specializations'=>Specialtie::paginate(5),
        ]);
    }

    public function store(){
        $data = $this->Validate([
            'doctor.doctor_name'=>'required|string|max:255',
            'doctor.doctor_age'=>'required|integer|min:20|max:65',
            'doctor.specialization_id'=>'required|int|exists:App\Models\Specialtie,id',
        ]);
       

        $data['doctor']['is_avalible'] = true;
         Doctor::create($data['doctor']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->doctor = [];
    }
}



