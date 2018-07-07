@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', "$post->title", ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', "$post->body", ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Save', ['class' => 'btn btn-success'])}}
        <a href="{{route('posts.show', $post->id)}}" class="btn btn-default">Cancel</a>
    {!! Form::close() !!}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
 
@endsection
