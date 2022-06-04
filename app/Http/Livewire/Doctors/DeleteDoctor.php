<?php

namespace App\Http\Livewire\Doctors;

use App\Models\Doctor;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DeleteDoctor extends Component
{
    public $doctor;
    public function mount($doctor_id){
        $this->doctor =  Doctor::find($doctor_id);
        $this->doctor = $this->doctor->toArray();
    }
    public function render()
    {
        return view('livewire.doctors.delete-doctor');
    }
    public function delete(){
        DB::table("doctors")->where('id',$this->doctor['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }
}
