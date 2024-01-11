@extends('layouts.system')

@section('content')
<div class="container">
    <h2>Detalhes do Usuário</h2>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $user->name }}</h3>
            <p class="card-text"><strong>E-mail:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Status:</strong> @if($user->status) Ativo @else Inativo @endif </p>
            <p class="card-text"><strong>Tipo Usuário:</strong> @if($user->user_type_enum == 1) Admin @else Comum @endif </p>
            <!-- Adicione mais campos conforme necessário -->

            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este Usuário?')">Excluir</button>
            </form>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
