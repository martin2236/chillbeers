<?php

namespace App\Http\Livewire;
use App\Models\Producto;
use Livewire\withPagination;
use Livewire\Component;


class Menu extends Component
{
   
    public function render()
    {
     return view('livewire.menu');
    }
}
