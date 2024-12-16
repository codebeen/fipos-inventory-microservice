<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\ApiCategoryController;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     *  Show all category
     */
    public function showAllCategory()
    {
        $categories = new ApiCategoryController();
        $retrieveCategories = $categories->getCategories()->getData()->data;



        if ($retrieveCategories) {

            dd($retrieveCategories);

            return view('category.index', compact('retrieveCategories'));
        }

        dd('no item');
    }



    /**
     *  Store new category
     */
    public function storeCategory(Request $request) {}
}
