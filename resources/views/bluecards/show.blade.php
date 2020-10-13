@extends('layouts.app')

@section('content')
    <div class="container py-4">
    <a href="/profiles/{{auth()->user()->ic}}" class="btn btn-default">Go Back</a>

        <ul class="list-group">
            <br>
            <li class="list-group-item">Your Digital Bluecard</li>
            <li class="list-group-item"><img style="width:45%" src="{{ asset('/storage/upload_imgs/'.$bluecard->upload_img) }}"></li>
            <li class="list-group-item">Plate License: {{ $bluecard->plate_number }}</li>
            <li class="list-group-item">Road-tax Expiry Date: {{ $bluecard->exp }}</li>
            <br>
            <div class="row">
                <div class="col"><a class="btn btn-primary pull-left" href="{{ route('bluecards.edit', $bluecard->id) }}" role="button">Edit Bluecard</a></div>
                <div class="col"><span class="text-right">
                    {!!Form::open(['action' => ['BluecardsController@destroy', $bluecard->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </span></div>
            </div>
        </ul>
    </div>
@endsection
