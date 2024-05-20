<?php

namespace App\Http\Controllers\Api;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $show_product = $request->input('show_product');

        if ($id) {
            $category = Category::with('products')->find($id);
            if ($category) {
                return new ApiResource(true, 'Get category successfully', $category, 200, 'OK');
            } else {
                return new ApiResource(false, 'Category not found', null, 404, 'Not Found');
            }
        }

        $category = Category::query();
        if ($name) {
            $category->where('name', 'like', '%' . $name . '%');
        }

        if ($show_product) {
            $category->with('products');
        }

        return new ApiResource(true, 'Get categories successfully', $category->paginate($limit), 200, 'OK');
    }
}
