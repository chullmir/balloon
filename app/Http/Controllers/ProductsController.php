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
        $products = Product::paginate(15);
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
        // $product = new Product;
        // $product->codigo = $request->codigo;
        // $product->nombre = $request->nombre;
        // $product->stock = $request->stock;
        // $product->tipo = $request->tipo;
        // $product->precio = $request->precio;
        // $product->categorias = $request->categorias;
        // $product->marca = $request->marca;
        // $product->save();
        
        // Product::create([
        //     'codigo'=>request('codigo'),
        //     'nombre'=>request('nombre'),
        //     'stock'=>request('stock'),
        //     'tipo'=>request('tipo'),
        //     'precio'=>request('precio'),
        //     'thumb'=>request('codigo').'.jpg',
        //     'categorias'=>request('categorias'),
        //     'marca'=>request('marca')
        // ]);

        Product::create(request(['codigo','nombre','stock','tipo','precio','categorias','marca']));



        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit')->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update(request(['codigo','nombre','stock','tipo','precio','categorias','marca']));
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
    public function search(Request $request){
        $queryString = $request->busqueda;
        $products = Product::where('nombre','LIKE',"%$queryString%")
        ->orWhere('marca','LIKE',"%$queryString%")
        ->orWhere('categorias','LIKE',"%$queryString%")
        ->paginate(15);
        return view('products.search')->with(compact('products','queryString'));
    }
}
