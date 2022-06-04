<?php

namespace App\Http\Livewire\Products;


use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Livewire\WithPagination;
class Product extends Component
{
use WithPagination;
protected $paginationTheme = 'bootstrap';

    public $product = [];
    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.products.product',[
            'products'=> ModelsProduct::paginate(5),

        ])->layout('layout.master');
    }
}
