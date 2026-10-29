<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function create(){
        return view('login');
    }

    public function store(Request $request){
        $credenciales = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended('/welcome');
        }

        return back()
            ->withErrors(['email' => 'Las credenciales no son correctas.'])
            ->onlyInput('email');
    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
