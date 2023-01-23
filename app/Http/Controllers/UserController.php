<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //登録画面
    public function getSignup(Request $request)
    {
        return view('user.signup');
    }

    //登録完了
    public function postSignup(Request $request){
        // バリデーション
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'area' => 'required',
            'experience' => 'required'
        ]);
        
        // DBインサート
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'area' => 'required',
            'experience' => 'required'
        ]);
        
        // 保存
        $user->save();
        
        // リダイレクト
        return redirect('user/profile');
    }

    public function showProfile()
    {
        return view('user.profile');
    }
}
