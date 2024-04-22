<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()

    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));

    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    
    {

        Product::create($request->all());

        return redirect(route('admin/products'))->with('success', 'Conteúdo Criado com sucesso');

    
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));

    }


}
