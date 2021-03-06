<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::paginate(15);
        return view('pages.index')->with(compact('products'));
    	
        // $sale = Product::where('sale','1')->paginate(12);
        // $featured = Product::all();
    	// return view('pages.index',compact('products'));
    }
    public function mayorista()
    {
        return view('pages.mayorista');
    }
    public function envios()
    {
        return view('pages.envios');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function franquicias()
    {
        return view('pages.franquicias');
    }
    public function eventos()
    {
        return view('pages.eventos');
    }
    public function publicitarios()
    {
        return view('pages.publicitarios');
    }
    public function puntos_venta()
    {
        return view('pages.puntos-venta');
    }
    // public function contacto()
    // {
    //     return view('pages.contacto');
    // }
    public function profile()
    {
        return view('pages.profile');
    }
}
