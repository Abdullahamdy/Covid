<?php

namespace App\Http\Livewire\Doctors;

use App\Models\Doctor;
use Livewire\Component;

class EditDoctor extends Component
{
    public $doctor;
    public function mount($doctor_id){
        $this->doctor = Doctor::find($doctor_id);
        $this->doctor = $this->doctor->toArray();
    }
    public function render()
    {
        return view('livewire.doctors.edit-doctor');
    }
    public function update(){
        $data = $this->validate([
            'doctor.doctor_name'=>'required|string|max:255',
            'doctor.doctor_age'=>'required|integer|min:20|max:65',
            'doctor.specialization_id'=>'required|int|exists:App\Models\Specialtie,id',
        ]);
        $data['doctor']['is_avalible'] = true;
        $upcat = Doctor::find($this->doctor['id']);
        $upcat->update($data['doctor']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
