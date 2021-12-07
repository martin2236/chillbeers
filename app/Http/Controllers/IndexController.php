<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class IndexController extends Controller
{
    public function index(){
        return view('welcome')->with([
            'productos'=> Producto::all()
        ]);
    }
}
