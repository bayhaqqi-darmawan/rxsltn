@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Insert Bluecard</h1>

        {!! Form::open(['action' => 'BluecardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group row">
                <div class="col-6">
                    {{ Form::label('plate_number', 'Plate Number')}}
                    {{Form::text('plate_number', $plate_number = Request::get('plate_number'), ['class'=>'form-control', 'placeholder'=>'BAA1234'])}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    {{Form::label('exp', 'Expiry Date')}}
                    {{Form::date('exp', '', ['class'=>'form-control', 'placeholder'=>'Expiry Date'])}}
                </div>

            </div>

            <div class="row">
                <div class="col"><p>Example for Bluecard</p></div>
            </div>
            <div class="row">
                <div class="col"><img src="{{ asset('bluecard-example.jpg') }}" alt="Example for Bluecard" style="max-width: 60%"></div>
                <div class="col"><span>Please take note! <br> Image must be clear and you can either scan or take picture of it </span></div>
            </div>
            <br>
        <div class="form-group">
            {{Form::file('upload_img')}}
        </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
