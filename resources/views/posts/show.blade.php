@extends('layouts.app')

@section('content')
    <a href="/posts">Go Back</a>
    <div class="card mt-4 mb-4">
        <div class="card-body">
            <h1 class="card-title">{{$post->title}}</h1>
            <p>{!!$post->body!!}</p>
            <hr>
            <small>Written on {{$post->created_at}}</small>
        </div>
    </div>
    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'delete', 'class' => 'float-right']) !!}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
