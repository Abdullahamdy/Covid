<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class EditProduct extends Component
{
    use WithFileUploads;
    public $photo;
    public $product;
    public $allproduct;
    public function mount($prod_id){
      $this->product =  Product::find($prod_id);
      $this->allproduct =  Product::find($prod_id);
      $this->product = $this->product->toArray();
    }
    public function render()
    {
        return view('livewire.products.edit-product',[
            'categories'=>Category::all(),
        ]);
    }

    public function update(){
        $data = $this->Validate([
            'product.name'=>'required',
            'product.price'=>'required',
            'product.cat_id'=>'required',
            'product.quantity'=>'required',
            'product.description'=>'required',
        ]);
        $upcat = Product::find($this->product['id']);
        $upcat->update($data['product']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
        if($photo = $this->photo){
            $oldimg = $upcat->image->filename;
            $file =public_path('Attachments/products/'.$oldimg);
            $img=File::delete($file);
            $name = $photo->getClientOriginalName();
            $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);
            $new = $photo->storeAs('Attachments/products', $name, 'upload_attachments');
            $upcat->image->update([
                'filename'=>$name,
            ]);

        }
    }

}
