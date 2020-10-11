@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Your Profile</h1>

            {!! Form::open(['action' => ['ProfilesController@update', $user->ic],'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('username', 'User Name')}}
                    {{Form::text('username', $user->username, ['class'=>'form-control', 'placeholder'=>'username'])}}
                </div>

                <div class="form-group">
                    {{Form::label('fullname', 'Full Name')}}
                    {{Form::text('fullname', $user->fullname, ['class'=>'form-control', 'placeholder'=>'Full Name'])}}
                </div>

                <div class="form-group">
                    {{Form::label('address', 'Address')}}
                    {{Form::text('address', $user->address, ['class'=>'form-control', 'placeholder'=>'Address'])}}
                </div>

                <div class="form-group">
                    {{Form::label('phone_number', 'Phone Number')}}
                    {{Form::text('phone_number', $user->phone_number, ['class'=>'form-control', 'placeholder'=>'Phone Number'])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}

    </div>

@endsection
