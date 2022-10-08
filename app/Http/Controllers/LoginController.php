<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use App\User;
use Auth;

class LoginController extends Controller
{
     public function login()
     {
         return view('auth.login');
     }

    public function postlogin(Request $Request)
    {
        if('Auth'::attempt($request->only('email','password'))){
            return redirect('/');
    }
        return redirect('/login');
    }

    public function logout()
    {
        'Auth'::logout();
    return redirect('/login');
    }
    
        public function create()
    {
        return view('auths.register');
    }
    public function store(Request $request){


        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'no_telp'=> $request->no_telp,
            'role'=>('user'),
            'password'=> bcrypt($request->password),
            'remember_token'=> str::random(40)
        ]);
        return redirect('/login');
    }
}