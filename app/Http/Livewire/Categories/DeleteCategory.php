<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use DB;
class DeleteCategory extends Component
{

    public $category;
    public function mount($cat_id){
        $this->category =  Category::find($cat_id);
        $this->category = $this->category->toArray();
    }
    public function render()
    {
        return view('livewire.categories.delete-category');
    }
    public function delete(){
        DB::table("categories")->where('id',$this->category['id'])->delete();
        $this->emit('ActionrefreshUsersList');
        $this->dispatchBrowserEvent('close-modal');

       
    }
}
