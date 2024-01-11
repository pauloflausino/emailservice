<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    
    public function index()
    {
        // Apenas usuários autenticados podem listar usuários
        //$this->authorize('viewAny', User::class);
        if(Auth::user()->name){
            $users = User::all();
            return view('users.index', compact('users'));
        }

        
    }

    public function create()
    {
        // Apenas administradores podem criar usuários
        //$this->authorize('create', User::class);

        return view('users.create');
    }

    public function store(Request $request)
    {
        // Apenas administradores podem criar usuários
        //$this->authorize('create', User::class);

        // Valide os dados do formulário, se necessário
        User::create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        // Apenas administradores podem editar usuários
        //$this->authorize('update', $user);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Apenas administradores podem editar usuários
        //$this->authorize('update', $user);

        // Valide os dados do formulário, se necessário
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        // Apenas administradores podem excluir usuários
        //$this->authorize('delete', $user);

        $user->delete();
        return redirect()->route('users.index');
    }

    public function logout(User $user)
    { 
        Auth::logout();

        return redirect()->route('/');
        
 
        //return redirect()->route('login.index');
    }    
}
