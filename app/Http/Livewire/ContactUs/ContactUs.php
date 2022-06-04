<?php

namespace App\Http\Livewire\ContactUs;

use App\Models\ContactUs as ModelsContactUs;
use Livewire\Component;

class ContactUs extends Component
{


    public $contactus;
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.contact-us.contact-us',[
            'contact'=>ModelsContactUs::paginate(5),
        ])->layout('layout.master');

    }
}
