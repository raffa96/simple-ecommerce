<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();

        $categories = Category::all();

        return view('products.create', compact('product', 'categories'));
    }

    public function store()
    {
        $data = $this->validateRequest();

        Product::create($data);

        return redirect()->route('products.index');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required | min: 5',
            'description' => 'required | min: 10',
            'available' => 'required',
            'category_id' => 'required'
        ]);
    }

    public function show(Product $product)
    {
        $product = Product::findOrFail($product->id);

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Product $product)
    {
        $data = $this->validateRequest();

        $product->update($data);

        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
