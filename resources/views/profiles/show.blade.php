@extends('layouts.app')

@section('content')
    <div class="container">
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

        <a class="btn btn-primary" href="/profiles/{{Auth::user()->ic_number}}/edit" role="button">Edit Profile</a>
        <br><br>

            @if($bluecards)
                @if ($bluecards->user_ic == Auth::user()->ic_number)
                    <ul class="list-group">
                        <li class="list-group-item">Your Digital Bluecard</li>
                        <li class="list-group-item"><img style="width:45%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}"></li>
                        <li class="list-group-item">Plate License: {{ $bluecards->plate }}{{ $bluecards->number }}</li>
                        <li class="list-group-item">Road-tax Expiry Date: {{ $bluecards->exp }}</li>
                    </ul>
                @endif

                @else
                    <p>No Bluecards found</p>
            @endif
        <br>
            @if($insurances)
                @if ($insurances->user_ic == Auth::user()->ic_number)
                    <ul class="list-group">
                        <li class="list-group-item">Your Insurance</li>
                        <li class="list-group-item"><img style="width:45%" src="{{ asset('/storage/insurance_imgs/'.$insurances->insurance_img) }}"></li>
                        <li class="list-group-item">Insurance Expiry Date: {{ $insurances->ins_exp }}</li>
                    </ul>
                @endif

                @else
                    <p>No Insurance found</p>
            @endif
        <br>
        <a class="btn btn-primary" href="/bluecards/create" role="button">Upload Bluecard</a>
        <a class="btn btn-primary" href="/insurances/create" role="button">Upload Insurance</a>
        <br>

        <div class="visible-print text-center">
            {!! QrCode::size(100)->generate(Request::url()); !!}
        </div>
    </div>
@endsection
