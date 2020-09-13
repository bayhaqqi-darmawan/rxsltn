@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>test</h1>

    {!! Form::open(['action' => 'BluecardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('upload_img')}}
        </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
