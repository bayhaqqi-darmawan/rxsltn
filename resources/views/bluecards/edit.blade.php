@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit your Digital Bluecard</h1>

        {{-- @foreach ($user->bluecards as $bluecard) --}}
            <hr>
            <h2>Plate License: {{ $bluecards->plate_number }}</h2>
            {!! Form::open(['action' => ['BluecardsController@update', $user->id],'method' => 'POST']) !!}
                <div class="form-group">
                    <img style="width:45%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}">
                </div>

                <div class="form-group">
                    {{Form::label('plate', 'Plate')}}
                    {{Form::text('plate', $bluecards->plate,['class'=>'form-control', 'placeholder'=>'Plate'])}}
                </div>

                <div class="form-group">
                    {{Form::label('number', 'Number')}}
                    {{Form::text('number', $bluecards->number, ['class'=>'form-control', 'placeholder'=>'Number'])}}
                </div>

                <div class="form-group">
                    {{Form::label('exp', 'Road-tax Expiry Date')}}
                    {{Form::date('exp', $bluecards->exp, ['class'=>'form-control', 'placeholder'=>'Road-tax Expiry Date'])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}

        {{-- @endforeach --}}
    </div>
@endsection
