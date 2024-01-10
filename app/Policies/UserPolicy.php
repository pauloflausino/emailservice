<?php
// app/Policies/UserPolicy.php

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user)
    {
        // Apenas usuários autenticados podem listar usuários
        return Auth::check();
    }

    public function create(User $user)
    {
        // Apenas administradores podem criar usuários
        return Auth::check() && $user->user_type_enum == 1;
    }

    public function update(User $user, User $targetUser)
    {
        // Apenas administradores podem editar usuários
        return Auth::check() && $user->user_type_enum == 1;
    }

    public function delete(User $user, User $targetUser)
    {
        // Apenas administradores podem excluir usuários
        return Auth::check() && $user->user_type_enum == 1;
    }
}
