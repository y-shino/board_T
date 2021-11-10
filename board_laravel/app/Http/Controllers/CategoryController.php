<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function category(Request $request)
    {
        $categories = Category::all();
        return view('categories.category', [
            'categories' => $categories,
        ]);
    }

    public function category_add(Request $request)
    {
        $categories = Category::all();
        return view('categories.category-add', [
            'categories' => $categories,
        ]);
    }

    public function add(Request $request)
    {
        $category = new Category;
        // $category->id = $request['id'];
        $category->name = $request['name'];
        $category->comment = $request['comment'];
        $category->save();
        $categories = Category::all();
        
        return view('categories.category', [
            'categories' => $categories,
        ]);
    }


}
