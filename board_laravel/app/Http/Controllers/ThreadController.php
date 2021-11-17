<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;


class ThreadController extends Controller
{
    // Indexページの表示
    public function index(Request $request)
    {
        $comments = Category::find($request->id)->comments()->get(); 
      

        return view('threads.index',[
            'category_id'=>$request->id,
            'comments'=>$comments
        ]);
    }

    // 投稿された内容を表示するページ
    public function create(Request $request)
    {
        // バリデーションチェック
        $request->validate([
            'name' => 'required|max:10',
            'comment' => 'required|min:1|max:100',
        ]);
        // 投稿内容を受け取って変数に入れる
        $name = $request->input('name');
        $comment = $request->input('comment');

        Comment::create([
            'user_id' => 1,
            'category_id' => $request->category_id,
            'comment' => $comment
        ]);

        return redirect()->route('threads', ['id' => $request->category_id]);
    }
}


