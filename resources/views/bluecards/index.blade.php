@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->ic_number == $bluecards['user_ic'])
            <img style="width:80%" src="{{ asset('/storage/upload_imgs/'.$bluecards->upload_img) }}">
        @endif

    </div>
@endsection
