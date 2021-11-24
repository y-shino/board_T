<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{

    //投稿画面一覧

    public function mypage(Request $request)
    {
        $users = User::all();
        return view('profile.mypage', [
            'users' => $users,
        ]);
        
    }


}
