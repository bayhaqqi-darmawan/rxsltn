@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>

        @if(count($posts)> 0)
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h3><a class="text-primary" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{ $post->user->username }}</small>
                    </div>
                </div>
            @endforeach

            {{$posts->links()}}


            @else
                <p>No posts found</p>
        @endif
    </div>
@endsection
