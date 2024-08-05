<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index() {
        $produtos = Product::get();
        return Inertia::render('Admin/Product/Index', compact('produtos'));
    }
}
