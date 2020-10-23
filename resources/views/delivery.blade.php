@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="timetable-img text-center">
            <img src="img/content/timetable.png" alt="">
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-primary text-center">
                <thead>
                    <tr class="bg-light-gray">
                        <th class="text-uppercase">Time
                        </th>
                        <th class="text-uppercase">Monday</th>
                        <th class="text-uppercase">Tuesday</th>
                        <th class="text-uppercase">Wednesday</th>
                        <th class="text-uppercase">Thursday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">09:00am</td>
                        @foreach ($nines as $nine)
                            <td>
                                {{ $nine->place }}
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td class="align-middle">11:00am</td>
                        @foreach ($elevens as $eleven)
                            <td>
                                {{ $eleven->place }}
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td class="align-middle">1:00pm</td>
                        @foreach ($ones as $one)
                            <td>
                                {{ $one->place }}
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td class="align-middle">3:00pm</td>
                        @foreach ($threes as $three)
                            <td>
                                {{ $three->place }}
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
