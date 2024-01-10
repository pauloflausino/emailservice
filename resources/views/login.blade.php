@extends('master')

@section('content')

<a href="{{route('home.index')}}"> Home </a>

<h2>Login</h2>

@error('error')
    <span>{{ $message }}</span>
@enderror

<form action="{{route('login.store')}}" method="post">
    @csrf

<input type="text" name="email" id="email" value="rick.gemini@gmail.com">
@error('email')
    <span>{{ $message }}</span>
@enderror

<input type="password" name="password" id="password" value="123">
@error('password')
    <span>{{ $message }}</span>
@enderror

<button type="submit">Login</button>


</form>


@endsection