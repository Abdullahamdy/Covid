<?php

namespace App\Http\Livewire\Articale;

use Livewire\Component;
use App\Models\Articale as ArticaleModel;

class Articale extends Component
{
    protected $paginationTheme = 'bootstrap';

    public $articale = [];
    protected $listeners = ['ActionrefreshUsersList'];
    public function ActionrefreshUsersList(){

    }
    public function render()
    {
        return view('livewire.articale.articale',[
            'allArticales'=> ArticaleModel::paginate(5),

        ])->layout('layout.master');
    }

}
