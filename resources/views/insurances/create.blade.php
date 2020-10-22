@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Insert Insurance</h1>

        {!! Form::open(['action' => 'InsurancesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group row">
                <div class="col">
                    {{Form::label('ins_exp', 'Insurance Expiry Date')}}
                    {{Form::date('ins_exp', '', ['class'=>'form-control', 'placeholder'=>'Insurance Expiry Date'])}}
                </div>
            </div>

            <div class="form-group row">
                {{-- <div class="col-2">
                    {{Form::label('plate', 'Plate')}}
                    {{Form::text('plate', '', ['class'=>'form-control', 'placeholder'=>'BAA'])}}
                </div>

                <div class="col-3">
                    {{Form::label('number', 'Number')}}
                    {{Form::text('number', '', ['class'=>'form-control', 'placeholder'=>'1234'])}}
                </div> --}}
                <div class="col-6">
                    {{ Form::label('plate_number', 'Plate Number')}}
                    {{Form::text('plate_number', $plate_number = Str::upper(Request::get('plate')).Request::get('number'), ['class'=>'form-control', 'placeholder'=>'BAA1234'])}}
                </div>
            </div>
        <div class="form-group">
            {{Form::file('insurance_img')}}
        </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
