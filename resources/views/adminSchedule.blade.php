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


            <table class="table table-bordered table-responsive">
                <th colspan="2">Edit Schedule</th>
                <tr>
                    <td>select day</td>
                    {{-- {!! Form::open(['action' => ['ScheduleController@update', $days_id, $hours_id, $place],'method' => 'POST']) !!} --}}
                    <td>
                        {{ Form::select('days',
                        [
                            '1' => 'Monday',
                            '2' => 'Tuesday',
                            '3' => 'Wednesday',
                            '4' => 'Thursday'
                        ]
                        ) }}
                    </td>
                </tr>
                <tr>
                    <td>Select Time</td>
                    <td>
                        {{ Form::select('hours',
                        [
                            '' => '',
                            '1' => '9:00am',
                            '2' => '11.00am',
                            '3' => '1:00pm',
                            '4' => '3:00pm'
                        ]
                        ) }}
                    </td>
                </tr>
                <tr>
                    <td>Select Place</td>
                    <td>
                        {{ Form::select('place',
                            [
                            'Berakas' => 'Berakas',
                            'Gadong' => 'Gadong',
                            'Sengkurong' => 'Sengkurong',
                            'Serasa' => 'Serasa',
                            'Sungai Kebun' => 'Sungai Kebun',
                            'Bukit Sawat' => 'Bukit Sawat',
                            'Kuala Belait' => 'Kuala Belait',
                            'Labi' => 'Labi',
                            'Keriam' => 'Keriam',
                            'Lamunin' => 'Lamunin',
                            'Amo' => 'Amo',
                            'Bangar' => 'Berakas',
                            'Public Holiday' => 'Public Holiday'
                            ]
                        )
                        }}

                    </td>
                </tr>
            </table>
            <div class="">
                {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
