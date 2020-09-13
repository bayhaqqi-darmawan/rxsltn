@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center container">
        <h1>Welcome To RotexSolution!</h1>
        <p>We provide you a service where you can easily renew your road-tax on our website online!</p>
        
        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endguest
    </div>
@endsection
