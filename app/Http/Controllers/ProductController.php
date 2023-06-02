<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): Response
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function create(Request $request): Response
    {
        return view('product.create');
    }

    public function store(ProductStoreRequest $request): Response
    {
        $product = Product::create($request->validated());

        $request->session()->flash('product.name', $product->name);

        return redirect()->route('product.index');
    }

    public function show(Request $request, Product $product): Response
    {
        $products = Product::all();

        return view('product.show', compact('product', 'catefory'));
    }
}
