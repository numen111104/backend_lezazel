<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = ProductGallery::paginate(10);
        $product = Product::paginate(10);
        return view('pages.galleries.index', ['type_menu' => 'dashboard'], compact('galleries', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleries = ProductGallery::paginate(10);
        $products = DB::table('products')->get();
        return view('pages.galleries.create', ['type_menu' => 'dashboard'], compact('products', 'galleries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'product_id' => 'required|exists:products,id',
            ]);
            $gallery = new ProductGallery();
            $gallery->product_id = $request->product_id;
            if ($request->hasFile('url')) {
                $file = $request->file('url');
                $filename = hash('sha256', $file->getClientOriginalName() . microtime()) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads/gallery', $filename);
                $gallery->url = $filename;
            }
            $gallery->save();
            return redirect()->route('galleries.index')->with('success', 'Product Gallery created successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = ProductGallery::findOrFail($id);
        return view('pages.galleries.show', ['type_menu' => 'dashboard'], compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = ProductGallery::findOrFail($id);
        $products = DB::table('products')->get();
        return view('pages.galleries.edit', ['type_menu' => 'dashboard'], compact('gallery', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'product_id' => 'required|exists:products,id',
            ]);
            $gallery = ProductGallery::findOrFail($id);
            $gallery->product_id = $request->product_id;
            if ($request->hasFile('url')) {
                $file = $request->file('url');
                $filename = hash('sha256', $file->getClientOriginalName() . microtime()) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/uploads/gallery', $filename);
                $gallery->url = $filename;
            }
            $gallery->save();
            return redirect()->route('galleries.index')->with('success', 'Product Gallery updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $gallery = ProductGallery::findOrFail($id);
            $gallery->delete();
            return redirect()->route('galleries.index')->with('success', 'Product Gallery deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
