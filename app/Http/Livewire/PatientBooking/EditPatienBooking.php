<?php

namespace App\Http\Livewire\PatientBooking;

use App\Models\Room;
use App\Models\Nurse;
use App\Models\Doctor;
use App\Models\Patient;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PatientBooking;


class EditPatienBooking extends Component
{

    use WithFileUploads;

    public $pat_booking;
    public function mount($pat_booking_id){
      $this->pat_booking =  PatientBooking::find($pat_booking_id);
      $this->pat_booking = $this->pat_booking->toArray();
    }
    public function render()
    {
        return view('livewire.patient-booking.edit-patien-booking',[
            'patients'=>Patient::paginate(5),
            'nurses'=>Nurse::paginate(5),
            'doctors'=>Doctor::paginate(5),
            'rooms'=>Room::paginate(5),
        ]);
    }

    public function store(){
        $data = $this->Validate([
            'pat_booking.nurse_id'=>'required',
            'pat_booking.patient_id'=>'required',
            'pat_booking.doctor_id'=>'required',
            'pat_booking.room_id'=>'required',
        ]);
        $upcat = PatientBooking::find($this->pat_booking['id']);
        $upcat->update($data['pat_booking']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');

    }
}
