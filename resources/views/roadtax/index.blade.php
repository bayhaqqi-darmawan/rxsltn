@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <h5 class="card-header">Select Bluecard</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Your Bluecard
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (count($bluecards) > 0)
                                @foreach ($bluecards as $bluecard)
                                    <a class="dropdown-item" href="#" id="pl">{{$bluecard->plate}}{{$bluecard->number}}</a>
                                @endforeach

                                @else
                                <p class="card-text">You don't have any Digital Bluecard</p>
                            @endif
                        </div>
                    </div>
                </p>
            </div>
        </div>

            <br><br>

        <div class="card text-center">
            <h5 class="card-header">Select Insurance</h5>
            <div class="card-body">
                <p class="card-text">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Your Insurance
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (count($bluecards) > 0)
                                @foreach ($bluecards as $bluecard)
                                    @if ($bluecard->user_ic == auth()->user()->ic_number)
                                        <a class="dropdown-item" href="#" id="pl">{{$bluecard->plate}}{{$bluecard->number}}</a>
                                    @endif
                                @endforeach
                                @else
                                <p class="card-text">You don't have any Insurance</p>
                            @endif
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>

@endsection
