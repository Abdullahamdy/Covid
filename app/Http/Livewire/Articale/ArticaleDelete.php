<?php

namespace App\Http\Livewire\Articale;

use App\Models\Image;
use Livewire\Component;
use App\Models\Articale;
use Illuminate\Support\Facades\File;

class ArticaleDelete extends Component
{
    public  $articale;
    public function mount($articale_id){
      $this->articale =  Articale::find($articale_id);
      $this->articale = $this->articale->toArray();
    }
    public function render()
    {
        return view('livewire.articale.articale-delete');
    }
    public function delete(){
        $model =  Articale::find($this->articale['id']);
        foreach($model->image as $img){
          $file = $img->filename;
          $file =public_path('Attachments/Articales/'.$file);
          $img=File::delete($file);
          Image::where('imagable_id',$model->id)->delete();
          $model->delete();
          $this->emit('ActionrefreshUsersList');
          $this->dispatchBrowserEvent('close-modal');

        }
  }
}
