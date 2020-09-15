@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Insert Insurance</h1>

        {!! Form::open(['action' => 'InsurancesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('ins_exp', 'Insurance Expiry Date')}}
                {{Form::date('ins_exp', '', ['class'=>'form-control', 'placeholder'=>'Insurance Expiry Date'])}}
            </div>

        <div class="form-group">
            {{Form::file('insurance_img')}}
        </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection
