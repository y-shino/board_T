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

    public function edit(Request $request)
    {

            $user = User::where('id', $request["id"])
                ->first();


        
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function koushin(Request $request)
    {


        
        $user = User::find($request['id']);
        $user->name = $request['name'];
        $user->profile = $request['profile'];
        $user->image_name = $request['image_name'];
        $user->save();
        $users = User::all();


        return view('profile.mypage', [
            'users' => $users,
        ]);


    }


}
