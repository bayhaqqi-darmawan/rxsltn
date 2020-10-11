@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($bluecards)
            <br>
                @foreach ($bluecards as $bluecard)
                    <a href="/bluecards/{{ $bluecard->id }}" class="btn btn-primary">{{ $bluecard->plate_number }}</a>
                @endforeach

            @else
            <h2>You haven't upload any Bluecard yet</h2>
        @endif
    </div>
@endsection
