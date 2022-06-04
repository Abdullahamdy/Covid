<?php

namespace App\Http\Livewire\ContactUs;

use Livewire\Component;
use App\Models\ContactUs;
use Illuminate\Support\Facades\DB;

class ContactUsDelete extends Component
{
    public $contactus;
    public function mount($contactus_id){
        $this->contactus =  ContactUs::find($contactus_id);
        $this->contactus = $this->contactus->toArray();
    }
    public function render()
    {
        return view('livewire.contact-us.contact-us-delete');
    }
    public function delete(){
        DB::table("contact_us")->where('id',$this->contactus['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');


    }

}
