<?php

namespace App\Http\Livewire\PatientBooking;

use App\Models\Room;
use App\Models\Nurse;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientBooking;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePatienBooking extends Component
{
    use WithFileUploads;
    public $pat_booking =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public $fa = 1;
    public function render()
    {
        return view('livewire.patient-booking.create-patien-booking',[
            'patients'=>Patient::whereIsAvalible(1)->get(),
            'nurses'=>Nurse::whereIsAvalible(1)->get(),
            'doctors'=>Doctor::whereIsAvalible(1)->get(),
            'rooms'=>Room::whereIsAvalble(0)->get(),
        ]);
    }

    
    public function store(){
        $data = $this->Validate([
            'pat_booking.doctor_id'=>'required',
            'pat_booking.nurse_id'=>'required',
            'pat_booking.patient_id'=>'required',
            'pat_booking.room_id'=>'required',
        ]);

        $thisrecord = PatientBooking::create($data['pat_booking']);
        $thisrecord->doctor()->update(['is_avalible'=>0]);
        $thisrecord->nurse()->update(['is_avalible'=>0]);
        $thisrecord->room()->update(['is_avalble'=>1]);
        $thisrecord->patient()->update(['is_avalible'=>0]);
        
        $this->emit('saved');
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
         $this->pat_booking = [];


    }
}
