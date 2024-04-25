<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



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

    public function show(Product $Product)

    {
       

        return view('admin.product.show',  ['Product' => $Product]);
    }

    public function save(Request $request)
    {
        $product = new Product($request->all());

        $product->save();

        if ($request->hasFile('img_itens')) {
            $file = $request->file('img_itens');

            $filename = date('YmdHi') . $file->getClientOriginalName();

            $file->move(public_path('upload/admin_images'), $filename);

            $product->img_itens = $filename;

            $product->save();
        }

        return redirect()->back()->with('success', 'Produto criado com sucesso');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        return redirect(route('admin/products'))->with('success', 'Conteúdo apagado com sucesso');
    }

    public function update(Request $request, $id)

    {
        
        $products = Product::findOrFail($id);

        $nome = $request->nome;
        $sinopse = $request->sinopse;
        $conteudo = $request->conteudo;
        $img_itens = $request->img_itens;

        $products->nome = $nome;
        $products->sinopse = $sinopse;
        $products->conteudo = $conteudo;
        $products->img_itens = $img_itens;
        $data = $products->save();

        

        

        return redirect(route('admin/products'))->with('success', 'Conteúdo editado com sucesso');
    }
}
