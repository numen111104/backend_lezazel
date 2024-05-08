<?php

namespace App\Http\Controllers\Api;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index(){
        try {
            $category = Category::latest()->get();
            if($category->isEmpty()) {
                return new ApiResource(false, 'No categories found', null, 404, 'not_found', null);
            }
            return new ApiResource(true, 'Success', $category, 200, 'ok', null);
        } catch (\Exception $e) {
            return new ApiResource(false, 'An error occurred while fetching categories', null, 500, 'internal_server_error', null);
        }
    }
    
}
