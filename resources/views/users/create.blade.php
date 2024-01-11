@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Adicionar Novo Usuarios</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="status:">Status:</label>
            <select class="form-control" id="status:" name="status:" required>
                <option value="1">Ativo</option>
                <option value="0">Inativo </option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="user_type_enum">Tipo Usuário:</label>
            <select class="form-control" id="user_type_enum" name="user_type_enum" required>
                <option value="1">Admin</option>
                <option value="2">Usuário Padrão </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Usuario</button>
    </form>
</div>
@endsection
