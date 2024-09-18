<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index() {
        $produtos = Product::get();
        return Inertia::render('Admin/Product/Index', compact('produtos'));
    }

    public function store(Request $request) {
        $produto = new Product;
        $produto->title = $request->title;
        $produto->description = $request->description;
        $produto->price = $request->price;
        $produto->quantity = $request->quantity;
        $produto->category_id = $request->category_id;
        $produto->brand_id = $request->brand_id;
        $produto->save();

        if($request->hasFile('product_images')) {
            $produtoImagens = $request->file('product_images');
            foreach ($produtoImagens as $imagem) {
                    $nomeUnicoImagem = time() . '-' . Str::random(10) . '.' . $imagem->getClientOriginalExtension();
                    $imagem->move('product_images', $nomeUnicoImagem);
                    ProductImage::create([
                        'product_id' => $produto->id,
                        'image' => 'product_images/' . $nomeUnicoImagem
                    ]);
            }
        }
        return to_route('admi.product.index')->with('sucess','Produto criado com sucesso!');
    }
}
