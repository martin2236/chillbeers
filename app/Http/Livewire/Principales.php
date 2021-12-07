<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Collection;
use Livewire\withPagination;

class Principales extends Component
{
    use withPagination;
    
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    
    public function render()
    {   
        $principales =Producto::where('categoria', 'like', 'principal')
        ->where('nombre', 'like', $this->search.'%')
        ->get()->paginate(6);

        return view('livewire.principales')->with([
            'principales'=> $principales
        ]);
    }
}