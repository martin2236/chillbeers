<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Collection;
use Livewire\withPagination;

class Postres extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    
    public function render()
    {   
        $postres =Producto::where('categoria', 'like', 'postre')
        ->where('nombre', 'like', $this->search.'%')
        ->get()->paginate(6);

        return view('livewire.postres')->with([
            'postres'=> $postres
        ]);
    }
}

