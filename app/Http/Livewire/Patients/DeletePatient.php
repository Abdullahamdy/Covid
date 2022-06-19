<?php

namespace App\Http\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;

class DeletePatient extends Component
{

    public  $patient;
    public function mount($patient_id){
      $this->patient =  Patient::find($patient_id);
      $this->patient = $this->patient->toArray();
    }
    public function render()
    {
        return view('livewire.patients.delete-patient');
    }

    public function delete(){
        $model =  Patient::find($this->patient['id']);
          $model->delete();
          $this->emit('ActionrefreshUsersList');
          $this->dispatchBrowserEvent('close-modal');
  
        
    }
}
