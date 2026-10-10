<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        // echo"estoy en index";
        $productos = Product::get();
        echo "hola";
        return \View::make('producto',['productos' => $productos]);
    }    
}
