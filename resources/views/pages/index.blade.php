@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, quidem?</p>
        <a class="btn btn-info btn-lg" href="/login">Login</a>
        <a class="btn btn-success btn-lg" href="/register">Register</a>
    </div>
@endsection
