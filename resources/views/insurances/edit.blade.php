@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Edit your Insurance</h1>

            <hr>
            <h2>Plate License: {{ $insurance->plate_number }}</h2>
            {!! Form::open(['action' => ['InsurancesController@update', $insurance->id],'method' => 'POST']) !!}
                <div class="form-group">
                    <img style="width:45%" src="{{ asset('/storage/insurance_imgs/'.$insurance->insurance_img) }}">
                </div>

                <div class="form-group">
                    {{Form::label('plate', 'Plate')}}
                    {{Form::text('plate', $insurance->plate,['class'=>'form-control', 'placeholder'=>'Plate'])}}
                </div>

                <div class="form-group">
                    {{Form::label('number', 'Number')}}
                    {{Form::text('number', $insurance->number, ['class'=>'form-control', 'placeholder'=>'Number'])}}
                </div>

                <div class="form-group">
                    {{Form::label('ins_exp', 'Insurance Expiry Date')}}
                    {{Form::date('ins_exp', $insurance->ins_exp, ['class'=>'form-control', 'placeholder'=>'Road-tax Expiry Date'])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
    </div>
@endsection
