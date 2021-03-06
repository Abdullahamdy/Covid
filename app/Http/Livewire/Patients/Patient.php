<?php

namespace App\Http\Livewire\Patients;

use App\Models\Patient as ModelsPatient;
use Livewire\Component;
use Livewire\WithPagination;

class Patient extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }
    public $patients = [];
    public function render()
    {
        return view('livewire.patients.patient',[
            'AllPatient'=>ModelsPatient::paginate(5)
        ])->layout('layout.master');
    }
}
