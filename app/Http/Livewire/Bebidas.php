<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Collection;
use Livewire\withPagination;

class Bebidas extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    
    public function render()
    {   
        $bebidas =Producto::where('categoria', 'like', 'bebida')
        ->where('nombre', 'like', $this->search.'%')
        ->get()->paginate(6);

        return view('livewire.bebidas')->with([
            'bebidas'=> $bebidas
        ]);
    }
    
}
