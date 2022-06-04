<?php

namespace App\Http\Livewire\Categories;
use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $category = [];
    protected $listeners = ['ActionrefreshUsersList'];

    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.categories.category',[
            'categories'=>ModelsCategory::paginate(5),
        ])->layout('layout.master');

    }
}
