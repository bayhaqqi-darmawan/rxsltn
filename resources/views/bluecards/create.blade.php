@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Insert Bluecard</h1>

        {!! Form::open(['action' => 'BluecardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('plate', 'Plate')}}
                {{Form::text('plate', '', ['class'=>'form-control', 'placeholder'=>'Plate'])}}
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
