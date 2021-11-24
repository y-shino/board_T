<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }

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
