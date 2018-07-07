@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts) > 0)
        <ul class="list-group">
            @foreach($posts as $post)            
                <li class="list-group-item">
                    <a href="/posts/{{$post->id}}">
                        <h1>{{$post->title}}</h1>
                        <small>Written on {{$post->created_at}}</small>
                    </a>
                </li>         
            @endforeach
        </ul>
    @endif
    {{$posts->links()}}
@endsection
