<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    /**
     *  Get all the categories
     */
    public function getCategories()
    {
        $categories = Category::all();

        return response()->json([

            'success' => true,
            'message' => 'Successful retrieve of data',
            'data' => $categories,

        ]);
    }


    
}
