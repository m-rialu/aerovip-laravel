<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $credential = $request->validate(['email' =>'required|email',
                                        'password' =>'required|min:8'
    ]);

    if(Auth::attempt($credential)){
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
        return back()->withErrors(['auth_error' => 'Usuário ou senha inválidos!!!'])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showLogin');
    }

    public function showLogin(){
        return view('login');
    }
}
