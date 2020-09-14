@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users</h1>

        @if(count($users)> 0)
            @foreach($users as $user)
                <div class="card">
                    <div class="card-body">
                        <h3><a class="text-primary" href="/admins/{{$users->ic_number}}">{{$users->username}}</a></h3>
                    </div>
                </div>
            @endforeach

            @else
                <p>No posts found</p>
        @endif
    </div>
@endsection
