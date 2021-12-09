<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class LikeController extends Controller
{
    public function store(Comment $comment)
    {
        $comment->users()->attach(Auth::id(), ['type' => 'like']);

        return redirect()->route('threads', ['id' => $comment->category_id]);
    }



    public function destroy(Comment $comment)
    {
        $comment->users()->detach(Auth::id());

        return redirect()->route('threads', ['id' => $comment->category_id]);
    }
}
