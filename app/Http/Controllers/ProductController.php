<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $product = Product::paginate(10);
        return view('pages.products.index', ['type_menu' => 'dashboard'], compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        return view('pages.products.create', ['type_menu' => 'dashboard'], compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|string|max:255',
            
        ]);
    
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->tags = $request->tags;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('pages.products.show', ['type_menu' => 'dashboard'], compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = DB::table('categories')->get();
        return view('pages.products.edit', ['type_menu' => 'dashboard'], compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|string|max:255',
        ]);
    
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->tags = $request->tags;
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
