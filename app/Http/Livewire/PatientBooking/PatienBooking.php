<?php

namespace App\Http\Livewire\PatientBooking;

use App\Models\PatientBooking;
use Livewire\Component;
use Livewire\WithPagination;

class PatienBooking extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }
    public $pat_booking = [];
    public function render()
    {
        return view('livewire.patient-booking.patien-booking',[
            'pat_bookings'=> PatientBooking::paginate(5),

        ])->layout('layout.master');
    }
}
