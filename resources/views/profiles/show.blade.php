@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-dark">
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
                    <td>{{ Auth::user()->fullname }}</td>
                </tr>
                <tr>
                    <th scope="row">Ic - Number</th>
                    <td>{{ Auth::user()->ic_number }}</td>
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
                    <td>{{ Auth::user()->email }}</td>
                </tr>
            </tbody>
        </table>

            {{-- @if ($bluecards->upload_img)
                <img style="width:80%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}">

                @else
                <h3>You have not submitted any bluecards</h3>
            @endif --}}

            @if($bluecards)
                @if ($bluecards->user_ic == Auth::user()->ic_number)
                    <img style="width:80%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}">
                @endif

                @else
                    <p>No Bluecards found</p>
            @endif
        <br>
        <br>
        <a class="btn btn-primary" href="/bluecards/create" role="button">Upload Bluecard</a>
        <br>

        <div class="visible-print text-center">
            {!! QrCode::size(100)->generate(Request::url()); !!}
        </div>
    </div>
@endsection
