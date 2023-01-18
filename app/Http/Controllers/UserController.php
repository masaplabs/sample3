<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //登録画面
    public function getSignup(Request $request)
    {
        return view('user.signup');
    }
}
