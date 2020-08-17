@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>

        <div class="card">
            <div class="card-body">
                {{$post->body}}
            </div>
        </div>


        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>

        <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>


@endsection
