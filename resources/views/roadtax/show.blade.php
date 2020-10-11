@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <h5 class="card-header">Select Digital Bluecard</h5>
            <div class="card-body">
                <p class="card-text">
                    {!! Form::open(['action' => 'RoadtaxController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group row">
                        <label class="col-md-6" for="selectedBluecard">Your Bluecard</label>
                        <select class="form-control col-md-3" name="selectedBluecard">
                            @if ($user->bluecards)
                                @foreach ($user->bluecards as $bluecard)
                                    <option class="dropdown-item"  value="{{ $bluecard->id }}">{{$bluecard->plate}}{{$bluecard->number}}</option>
                                @endforeach

                                @else
                                <p class="card-text">You don't have any Digital Bluecard</p>
                            @endif
                        </select>
                    </div>
                </p>
            </div>
        </div>

            <br><br>

        <div class="card text-center">
            <h5 class="card-header">Select Insurance</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="form-group row">
                        <label class="col-md-6" for="selectedInsurance">Your Insurance</label>
                        <select class="form-control col-md-3" name="selectedInsurance">
                            @if ($user->insurances)
                                @foreach ($user->insurances as $insurance)
                                    <option class="dropdown-item" value="{{$insurance->id}}">{{$insurance->plate_number}}</option>
                                @endforeach

                                @else
                                <p class="card-text">You don't have any Insurance</p>
                            @endif
                        </select>
                    </div>
                </p>
            </div>
        </div>
        <br>
        <div class="text-center">
            {{Form::submit('Submit', ['class'=>'btn-lg btn-primary'])}}
            {!! Form::close() !!}
        </div>

    </div>

@endsection
