@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To RotexSolution</div>
            <div class="masthead-heading text-uppercase">Renew your road-tax online!</div>
        </div>
        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

            @else
            <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Go to your dashboard</a>
        @endguest
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">We offer you with quality services</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4 class="my-3">Digital bluecard</h4>
                    <p class="text-muted">Upload your bluecard and make it digital! Now you only have to present your QR Code to review the bluecard.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-left">Copyright © {{ config('app.name', 'RotexSolution') }} 2020</div>
                <div class="col-lg-6 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- <div class="jumbotron text-center container">
        <h1>Welcome To RotexSolution</h1>
        <p>We provide you a service where you can easily renew your road-tax on our website online!</p>

        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

            @else
            <a class="btn btn-primary btn-lg" href="/bluecards/create" role="button">Upload Your Bluecard</a>
        @endguest
    </div> --}}
@endsection
