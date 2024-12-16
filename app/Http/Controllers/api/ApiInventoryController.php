<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;


class ApiInventoryController extends Controller
{
    /**
     *  Get all items
     */
    public function getItems()
    {
        $items = Item::with('category')->get();
        $categories = Category::all();

        return response()->json([

            'success' => true,
            'message' => 'Successful retrieve of data',
            'items' => $items,
            'categories' => $categories

        ], 200);
    }


    /**
     *  Get categorized items
     */
    public function getCategorizedItems($name) 
    {

        $category = Category::where('category_name', $name)->first();

        if(!$category) {

            dd('failed to get the data');

        }

        $categorizedItems = Item::where('category_id', $category->id)
            ->with('category')
            ->get();

        $categories = Category::all();

        return response()->json([

            'success' => true,
            'message' => 'Data retrieved successfully',
            'categorizedItems' => $categorizedItems,
            'categories' => $categories,

        ], 200);


    }
}
