<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class InventoryController extends Controller
{
    /**
     *  Display all items
     */
    public function showAll()
    {

        $categories = Category::all();
        $items = Item::with('category')->get();

        return view('inventory.index', compact('categories', 'items'));
    }


    /**
     *  Display categorized items
     */
    public function showCategorized($name)
    {
        $category = Category::where('category_name', $name)->first();

        if (!$category) {
            dd('failed');
        }

        $categories = Category::all();
        $categorizedItems = Item::where('id', $category->id)
            ->with('category')
            ->get();

        return view('inventory.categorized', compact('categories', 'categorizedItems'));
    }
}
