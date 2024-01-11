<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        if(!$authenticated){ // Autenticação falhou
            
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        
        }else {
        
            return redirect()->route('users.index');
        
        }

    }

    
    public function destroy()
    { 
        Auth::logout();

        return redirect()->route('login.index');
        
 
        //return redirect()->route('login.index');
    }    
}
