<?php

namespace App\Http\Livewire\PatientBooking;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PatientBooking;

class DeletePatienBooking extends Component
{

    use WithFileUploads;

    public $pat_booking;
    public function mount($pat_booking_id){
      $this->pat_booking =  PatientBooking::find($pat_booking_id);
      $this->pat_booking = $this->pat_booking->toArray();
    }
    public function render()
    {
        return view('livewire.patient-booking.delete-patien-booking');
    }

    public function delete(){
        $model =  PatientBooking::find($this->pat_booking['id']);
        $model->doctor()->update(['is_avalible'=>1]);
        $model->nurse()->update(['is_avalible'=>1]);
        $model->room()->update(['is_avalble'=>0]);
        $model->patient()->update(['is_avalible'=>1]);
        $model->delete();
          $this->emit('ActionrefreshUsersList');
          $this->dispatchBrowserEvent('close-modal');
  
        
    }
}
