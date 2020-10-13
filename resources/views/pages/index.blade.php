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
                @if (Auth::user()->role == "admin")
                    <a class="btn btn-primary btn-lg" href="/admins" role="button">Go to Admin panel</a>

                    @else
                        <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Go to your dashboard</a>
                @endif

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
                    <h4 class="my-3">Renew your Road-tax with us</h4>
                    <p class="text-muted">Renewing never been this easier. Submit your digital bluecard and insurance to us, make the payment then done!</p>
                </div>
                <div class="col-md-4">
                    <h4 class="my-3">Pay it Online!</h4>
                    <p class="text-muted">Pay for your renewal online! Eliminate the hassle to go and queueing for making the payment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About Us</h2>
                <h3 class="section-subheading text-muted">We are a company with groups of people that are passionate to further improve our country's digital technology. Rotexsolution is an initiative to enhance the car's road-tax system into an online platform with better efficiency, catchy and simplicity.</h3>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-left">Copyright © {{ config('app.name', 'RotexSolution') }} 2020</div>
                <div class="col-lg-6 text-lg-right">
                    {{-- <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a> --}}
                </div>
            </div>
        </div>
    </footer>
@endsection
