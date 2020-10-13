@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">{{ $user->username }}'s Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">User Name</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Full Name</th>
                    <td>{{ $user->fullname }}</td>
                </tr>
                <tr>
                    <th scope="row">Ic - Number</th>
                    <td>{{ $user->ic }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone Number</th>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>

        @if ($roadtaxes)
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    @if(count($user->roadtaxes) > 0 )
                        <ul class="list-group">
                            <li class="list-group-item"><b>{{ $user->username }}'s</b> Digital Bluecard</li>
                            <li class="list-group-item"><img style="width:85%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}"></li>
                            <li class="list-group-item">Plate License: {{ $bluecards->plate_number }}</li>
                            <li class="list-group-item">Road-tax Expiry Date: {{ $bluecards->exp }}</li>
                        </ul>

                        @else
                            <p>No Bluecards found</p>
                    @endif
                </div>

                <div class="col">
                    @if(count($user->insurances) > 0)
                        @if ($insurances->user_ic == $user->ic)
                            <ul class="list-group">
                                <li class="list-group-item"><b>{{ $user->username }}'s</b> Insurance</li>
                                <li class="list-group-item"><img style="width:85%" src="{{ asset('/storage/insurance_imgs/'.$insurances->insurance_img) }}"></li>
                                <li class="list-group-item">Plate License: {{ $insurances->plate_number }}</li>
                                <li class="list-group-item">Insurance Expiry Date: {{ $insurances->ins_exp }}</li>
                            </ul>
                        @endif

                        @else
                            <p>No Insurance found</p>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <h5>Action</h5>
                </div>

                <br>
                <div class="card-body">
                    <h5 class="card-title">Your action towards the user's submission</h5>

                    {!! Form::open(['action' => ['AdminsController@update', $roadtaxes->id],'method' => 'PUT']) !!}
                        <div class="form-group">
                            {{Form::select('approval', array('Approved' => 'Approve', 'Rejected' => 'Reject'))}}
                        </div>

                        <div class="form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', '')}}
                        </div>

                        <div class="form-group">
                            {{Form::label('reason', 'Reason for rejecting')}}
                            {{Form::textarea('reason', '', ['class'=>'form-control', 'placeholder'=>'Your Reason'])}}
                        </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>

            <br>
            @else
            <h3>{{ $user->username }} has not send their records yet</h3>
        @endif


    </div>
@endsection
