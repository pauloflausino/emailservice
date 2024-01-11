@extends('layouts.form')

@section('content')
<div class="container">
    <h2>Editar Usuário</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="status:">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">Escolha um status</option>
                <option value="1" @if( $user->status) selected @endif >Ativo</option>
                <option value="0" @if( $user->status == 0) selected @endif>Inativo </option>
            </select>
        </div>

        <div class="form-group">
            <label for="user_type_enum">Tipo Usuário:</label>
            <select class="form-control" id="user_type_enum" name="user_type_enum" required>
                <option value="">Escolha tipo de usuário</option>
                <option value="1" @if( $user->user_type_enum) selected @endif >Admin</option>
                <option value="2" @if( $user->user_type_enum == 2) selected @endif>Comum </option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Atualizar Usuário</button>

        <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
    </form>
</div>
@endsection
