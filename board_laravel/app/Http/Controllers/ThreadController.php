<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class ThreadController extends Controller
{
    /**
     * スレッド一覧
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $comments = Category::find($request->id)->comments()->get(); 
      

       return view('threads.index',['comments'=>$comments]);
    }
}


