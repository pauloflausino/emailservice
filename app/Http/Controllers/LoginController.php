<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }
    
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Esse campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ter um email válido',
            'password.required' => 'Esse campo password é obrigatório'
        ]);

        $credentials = $request->only('email', 'password');

        $authenticated = Auth::attempt($credentials);

        if(!$authenticated){
            return redirect()->route('login.index')->withErrors(['error' => 'email or password invalid']);
        }

    }

    public function destroy()
    {
        var_dump('logout');

    }
}
