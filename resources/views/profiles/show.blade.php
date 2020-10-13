@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Your Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">User Name</th>
                    <td>{{ Auth::user()->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Full Name</th>
                    <td>{{ ucwords(Auth::user()->fullname) }}</td>
                </tr>
                <tr>
                    <th scope="row">Ic - Number</th>
                    <td>{{ Auth::user()->ic }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone Number</th>
                    <td>{{ Auth::user()->phone_number }}</td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>{{ Auth::user()->address }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ ucfirst(Auth::user()->email) }}</td>
                </tr>
            </tbody>
        </table>

        <a class="btn btn-primary" href="{{ route('profiles.edit', Auth::user()->ic) }}" role="button">Edit Profile</a>
        <br>

        @if (count($user->bluecards) > 0)
            @if (auth()->user()->ic == $user->ic)
            <br>
                @foreach ($user->bluecards as $bluecard)
                    <a href="/bluecards/{{ $bluecard->id }}" class="btn btn-secondary">{{ $bluecard->plate_number }}</a>
                @endforeach
            @endif

            @else
            <br>
            <h4>You haven't upload any Bluecard yet</h4>
        @endif

        <br><br>
        <a class="btn btn-primary" href="/bluecards/create" role="button">Upload Bluecard</a>

        <hr>

            @if (count($user->insurances) > 0)
                @if (auth()->user()->ic == $user->ic)
                <br>
                    @foreach ($user->insurances as $insurance)
                        <a href="/insurances/{{ $insurance->id }}" class="btn btn-secondary">{{ $insurance->plate_number }}</a>
                    @endforeach
                @endif

                @else
                    <br>
                    <h4>No Insurance found</h4>
            @endif

        <br><br>
        <a class="btn btn-primary" href="/insurances/create" role="button">Upload Insurance</a>
        <hr>

        <div class="visible-print text-center">
            {!! QrCode::size(100)->generate(Request::url()); !!}
        </div>
    </div>
@endsection
