@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Livros</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Adicionar Novo Usuário</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este Usuário?')">Excluir</button>
                        </form>
                        {{-- Você pode adicionar um formulário para deletar o livro se desejar --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
