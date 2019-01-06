<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'codigo' => 'required',
                'nombre' => 'required',
                'stock' => 'required | integer',
                'tipo' => 'required',
                'precio' => 'required | numeric',
                'categorias' => 'required',
                'marca' => 'required',
            ],[
                'codigo.required' => 'El campo código es obligatorio',
                'nombre.required' => 'El campo nombre es obligatorio',
                'stock.required' => 'El campo stock es obligatorio',
                'tipo.required' => 'El campo tipo es obligatorio',
                'precio.required' => 'El campo precio es obligatorio',
                'categorias.required' => 'El campo categorías es obligatorio',
                'marca.required' => 'El campo marca es obligatorio',
            ]
        );
        $product = new Product;
        $product->codigo = $request->codigo;
        $product->nombre = $request->nombre;
        $product->stock = $request->stock;
        $product->tipo = $request->tipo;
        $product->precio = $request->precio;
        $product->categorias = $request->categorias;
        $product->marca = $request->marca;
        $product->save();
        // return $request->marca;

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
