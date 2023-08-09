<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function login_post(AdminRequest $request){
        if(Auth::guard('admin')->attempt(["email" => $request->email, "password" => $request->password])){
            return redirect()->route('admin.index');
        }else{
            return back()->withErrors('Email ya da şifre hatalı!');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
