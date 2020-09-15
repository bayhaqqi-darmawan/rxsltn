@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Insert Bluecard</h1>

        {!! Form::open(['action' => 'BluecardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group row">
                <div class="col-2">
                    {{Form::label('plate', 'Plate')}}
                    {{Form::text('plate', '', ['class'=>'form-control', 'placeholder'=>'BAA'])}}
                </div>
                <div class="col-3">
                    {{Form::label('number', 'Number')}}
                    {{Form::text('number', '', ['class'=>'form-control', 'placeholder'=>'1234'])}}
                </div>

            </div>

            <div class="form-group">
                {{Form::label('exp', 'Expiry Date')}}
                {{Form::date('exp', '', ['class'=>'form-control', 'placeholder'=>'Expiry Date'])}}
            </div>

        <div class="form-group">
            {{Form::file('upload_img')}}
        </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
