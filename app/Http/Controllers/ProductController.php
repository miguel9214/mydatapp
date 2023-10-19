<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'products.index',
            ['products' => Product::latest()->paginate()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Funcion de validacion
        $request->validate([
            'sku' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        $product = $request->user()->products()->create([
            'sku' => $request->sku,
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return redirect()->route('products.edit', $product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Funcion de validacion
        $request->validate([
            'sku' => 'required',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        $product->update([
            'sku' => $request->sku,
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return redirect()->route('products.edit', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
