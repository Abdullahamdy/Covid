<?php

namespace App\Http\Livewire\Articale;

use App\Models\Image;

use Livewire\Component;
use App\Models\Articale;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class ArticaleCreate extends Component
{
    public $articale =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    use WithFileUploads;
    public $photo;
    public function render()
    {
        return view('livewire.articale.articale-create');
    }


    public function store(){
        $data = $this->Validate([
            'articale.tittle'=>'required',
            'articale.text'=>'required',

        ]);

        $thisrecord =   Articale::create($data['articale']);


        foreach($this->photo as $file){
                    $name = $file->getClientOriginalName();
                    $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);
                    $new = $file->storeAs('Attachments/Articales', $name, 'upload_attachments');
                    $images= new Image();
                    $images->filename = $name;
                    $thisrecord->image()->save($images);

                }
        $this->emit('saved');
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');


   $this->articale = [];


    }
}
