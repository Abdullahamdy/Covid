<?php

namespace App\Http\Livewire\Categories;
use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{

    public $category =[];
    protected $listeners = [
        'saved'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.categories.create-category');
    }
    public function store(){
        $data = $this->Validate([
            'category.name'=>'required',
        ]);
        $category = Category::create($data['category']);
        $this->emit('saved');
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');
        $this->category = [];
    }
}
