<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Collection;
use Livewire\withPagination;

class Aperitivos extends Component
{
    use withPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search;
    
    public function render()
    {   
        $aperitivos =Producto::where('categoria', 'like', 'aperitivo')
        ->where('nombre', 'like', $this->search.'%')
        ->get()->paginate(6);

        return view('livewire.aperitivos')->with([
            'aperitivos'=> $aperitivos
        ]);
    }
}
