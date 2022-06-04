<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class EditCategory extends Component
{
    public $category;
    public function mount($cat_id){
        $this->category = Category::find($cat_id);
        $this->category = $this->category->toArray();
        

    }
    public function render()
    {
        return view('livewire.categories.edit-category');
    }
    public function update(){
        $data = $this->validate([
            'category.name' => 'required',
        ]);    
        $upcat = Category::find($this->category['id']);
        $upcat->update($data['category']);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('ActionrefreshUsersList');
    }
}
