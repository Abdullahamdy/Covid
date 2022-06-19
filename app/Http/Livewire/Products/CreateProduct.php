<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class CreateProduct extends Component
{
    use WithFileUploads;
    public $product =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public $photo = [],$fa = 1;
    public function render()
    {
        return view('livewire.products.create-product',[
            'categories'=>Category::paginate(5),
        ]);
    }

    public function store(){
        $data = $this->Validate([
            'product.name'=>'required',
            'product.price'=>'required',
            'product.cat_id'=>'required',
            'product.quantity'=>'required',
            'product.description'=>'required',

        ]);

        $thisrecord =   Product::create($data['product']);


        foreach($this->photo as $file){
                    $name = $file->getClientOriginalName();
                    $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);
                    $new = $file->storeAs('Attachments/products', $name, 'upload_attachments');
                    $images= new Image();
                    $images->filename = $name;
                    $thisrecord->image()->save($images);

                }
        $this->emit('saved');
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');


   $this->product = [];


    }
}
