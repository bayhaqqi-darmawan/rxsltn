@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Edit your Digital Bluecard</h1>

            <hr>
            <h2>Plate License: {{ $bluecard->plate_number }}</h2>
            {!! Form::open(['action' => ['BluecardsController@update', $bluecard->id],'method' => 'POST']) !!}
                <div class="form-group">
                    <img style="width:45%" src="{{ asset('/storage/upload_imgs/'.$bluecard->upload_img) }}">
                </div>

                <div class="form-group">
                    {{Form::label('plate', 'Plate')}}
                    {{Form::text('plate', $bluecard->plate,['class'=>'form-control', 'placeholder'=>'Plate'])}}
                </div>

                <div class="form-group">
                    {{Form::label('number', 'Number')}}
                    {{Form::text('number', $bluecard->number, ['class'=>'form-control', 'placeholder'=>'Number'])}}
                </div>

                <div class="form-group">
                    {{Form::label('exp', 'Road-tax Expiry Date')}}
                    {{Form::date('exp', $bluecard->exp, ['class'=>'form-control', 'placeholder'=>'Road-tax Expiry Date'])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
    </div>
@endsection
