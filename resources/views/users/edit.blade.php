@extends('layouts.app')

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


        <button type="submit" class="btn btn-primary">Atualizar Usuário</button>
    </form>
</div>
@endsection
