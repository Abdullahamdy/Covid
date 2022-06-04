<?php

namespace App\Http\Livewire\Articale;

use Livewire\Component;
use App\Models\Articale;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class ArticaleEdit extends Component
{
    use WithFileUploads;
    public $photo;

    public $articale;
    public function mount($articale_id){
      $this->articale =  Articale::find($articale_id);
      $this->articale = $this->articale->toArray();
    }
    public function render()
    {
        return view('livewire.articale.articale-edit');
    }
    public function update(){
        $data = $this->Validate([
            'articale.tittle'=>'required',
            'articale.tittle'=>'required',
        ]);
        $artic = Articale::find($this->articale['id']);
        $artic->update($data['articale']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
        if($photo = $this->photo){
            $oldimg = $artic->image->filename;
            $file =public_path('Attachments/Articales/'.$oldimg);
            $img=File::delete($file);
            $name = $photo->getClientOriginalName();
            $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);
            $new = $photo->storeAs('Attachments/Articales', $name, 'upload_attachments');
            $artic->image->update([
                'filename'=>$name,
            ]);

        }
    }
}
