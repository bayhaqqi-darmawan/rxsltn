@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a href="/dashboard" class="btn btn-default">Go Back</a>

        <br><br>

        <div class="text-center">
            <div class="card border-danger mb-3" style="max-width: 18rem;">
                <div class="card-header text-danger" style="font-size: 1.7em;">Reason Admin rejected</div>
                <div class="card-body ">
                @foreach ($user->roadtaxes as $roadtax)

                @endforeach
                <p class="card-text" style="font-size: 1.4em;">{{ $roadtax->reason }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
