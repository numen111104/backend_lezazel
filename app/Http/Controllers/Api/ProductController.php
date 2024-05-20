<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ApiResource;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $categories = $request->input('categories');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if ($id) {
            $product = Product::with('category', 'galleries')->find($id);
            if ($product) {
                return new ApiResource(true, 'Get product successfully', $product, 200, 'OK');
            } else {
                return new ApiResource(false, 'Product not found', null, 404, 'Not Found');
            }
        }

        $product = Product::with(['category','galleries']);
        if($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if($description) {
        $product->where('description', 'like', '%' . $description . '%');
        }

        if($tags) {
            $product->where('tags', 'like', '%' . $tags . '%');
        }

        if($price_from) {
            $product->where('price', '>=', $price_from);
        }

        if($price_to) {
            $product->where('price', '<=', $price_to);
        }

        if($categories) {
            $product->where('categories', $categories);
        }

        return new ApiResource(true, 'Get products successfully', $product->paginate($limit), 200, 'OK');
    }


}


