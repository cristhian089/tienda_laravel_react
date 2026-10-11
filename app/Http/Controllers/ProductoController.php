<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        // echo"estoy en index";
        $productos = Producto::get();
        // echo "hola";
        return \View::make('producto',['productos' => $productos]);
        // return view('producto',['titulo'=> "holaaaa"]);
    }  
    public function store(Request $request){

        // dd($request->all());s
        $producto = new Producto();
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->category = $request->category;
        $producto->brand = $request->brand;
        $producto->price = $request->price;

        $producto->save();
        return redirect('producto');

    } 
}
