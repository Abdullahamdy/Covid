<?php

namespace App\Http\Livewire\Doctors;

use App\Models\Doctor as ModelsDoctor;
use Livewire\Component;

class Doctor extends Component
{
    public $doctors = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.doctors.doctor',[
            'allDoctors'=>ModelsDoctor::paginate(5),
        ])->layout('layout.master');

    }
}
