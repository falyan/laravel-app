<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\SirtController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('email','password')))
        {
            return redirect('index');
        }

        return redirect ('login');
    }

    public function logout(Request $request)
    {
        //dd($request->all());
        Auth::logout();

        return view('Login.v_login');
    }

    public function registrasi()
    {
        return view('Login.v_registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
        //dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
       
    }
}
