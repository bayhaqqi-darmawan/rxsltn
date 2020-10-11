@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Your Insurances</li>
            <hr>
            <li class="list-group-item"><img style="width:45%" src="{{ asset('/storage/insurance_imgs/'.$insurance->insurance_img) }}"></li>
            <li class="list-group-item">Plate License: {{ $insurance->plate_number }}</li>
            <li class="list-group-item">Insurance Expiry Date: {{ $insurance->ins_exp }}</li>
            <br>
            <div class="row">
                <div class="col"><a class="btn btn-primary pull-left" href="{{ route('insurances.edit', $insurance->id) }}" role="button">Edit Insurance</a></div>
                <div class="col"><span class="text-right">
                    {!!Form::open(['action' => ['InsurancesController@destroy', $insurance->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </span></div>
            </div>
        </ul>
    </div>
@endsection
