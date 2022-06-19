<?php

namespace App\Http\Livewire\Products;

use App\Models\Image;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DeleteProduct extends Component
{
  public  $product;
  public function mount($prod_id){
    $this->product =  Product::find($prod_id);
    $this->product = $this->product->toArray();
  }

    public function render()
    {
        return view('livewire.products.delete-product');
    }
    public function delete(){
      $model =  Product::find($this->product['id']);
      foreach($model->image as $img){
        $file = $img->filename;
        $file =public_path('Attachments/products/'.$file);
        $img=File::delete($file);
        Image::where('imagable_id',$model->id)->delete();
        $model->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');

      }
    }
}
