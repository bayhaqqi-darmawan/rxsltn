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
                        @if (count($days) > 0)
                            @foreach ($days as $day)
                                <th class="text-uppercase">
                                    {{ $day->days }}
                                </th>
                            @endforeach
                        @endif

                    </tr>
                </thead>
                <tbody>
                    {{-- {!! Form::open(['action' => ['ScheduleController@update', $schedule->id],'method' => 'POST']) !!} --}}
                    <tr>
                        <td class="align-middle">09:00am</td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Brunei-Muara</option>
                                <option value="berakas">Berakas</option>
                                <option value="burong pingai ayer">Burong Pingai Ayer</option>
                                <option value="gadong">Gadong</option>
                                <option value="kianggeh">Kianggeh</option>
                                <option value="kilanas">Kilanas</option>
                                <option value="kota batu">Kota Batu</option>
                                <option value="lumapas">Lumapas</option>
                                <option value="mentiri">Mentiri</option>
                                <option value="pangkalan batu">Pangkalan Batu</option>
                                <option value="peramu">Peramu</option>
                                <option value="saba">Saba</option>
                                <option value="sengkurong">Sengkurong</option>
                                <option value="serasa">Serasa</option>
                                <option value="sungai kebun">Sungai Kebun</option>
                                <option value="tamoi">Tamoi</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Belait</option>
                                <option value="bukit sawat">Bukit Sawat</option>
                                <option value="kuala balai">Kuala Balai</option>
                                <option value="kuala belait">Kuala Belait</option>
                                <option value="labi">Labi</option>
                                <option value="sukang">Sukang</option>
                                <option value="seria">Seria</option>
                                <option value="melilas">Melilas</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Tutong</option>
                                <option value="keriam">Keriam</option>
                                <option value="kiudang">Kiudang</option>
                                <option value="lamunin">Lamunin</option>
                                <option value="pekan tutong">Pekan Tutong</option>
                                <option value="rambai">Rambai</option>
                                <option value="tanjong maya">Tanjong Maya</option>
                                <option value="telisai">Telisai</option>
                                <option value="ukong">Ukong</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Temburong</option>
                                <option value="amo">Amo</option>
                                <option value="bangar">Bangar</option>
                                <option value="batu apoi">Batu Apoi</option>
                                <option value="bokok">bokok</option>
                                <option value="rambai">Rambai</option>
                                <option value="labu">Labu</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">11:00am</td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Brunei-Muara</option>
                                <option value="berakas">Berakas</option>
                                <option value="burong pingai ayer">Burong Pingai Ayer</option>
                                <option value="gadong">Gadong</option>
                                <option value="kianggeh">Kianggeh</option>
                                <option value="kilanas">Kilanas</option>
                                <option value="kota batu">Kota Batu</option>
                                <option value="lumapas">Lumapas</option>
                                <option value="mentiri">Mentiri</option>
                                <option value="pangkalan batu">Pangkalan Batu</option>
                                <option value="peramu">Peramu</option>
                                <option value="saba">Saba</option>
                                <option value="sengkurong">Sengkurong</option>
                                <option value="serasa">Serasa</option>
                                <option value="sungai kebun">Sungai Kebun</option>
                                <option value="tamoi">Tamoi</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Belait</option>
                                <option value="bukit sawat">Bukit Sawat</option>
                                <option value="kuala balai">Kuala Balai</option>
                                <option value="kuala belait">Kuala Belait</option>
                                <option value="labi">Labi</option>
                                <option value="sukang">Sukang</option>
                                <option value="seria">Seria</option>
                                <option value="melilas">Melilas</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Tutong</option>
                                <option value="keriam">Keriam</option>
                                <option value="kiudang">Kiudang</option>
                                <option value="lamunin">Lamunin</option>
                                <option value="pekan tutong">Pekan Tutong</option>
                                <option value="rambai">Rambai</option>
                                <option value="tanjong maya">Tanjong Maya</option>
                                <option value="telisai">Telisai</option>
                                <option value="ukong">Ukong</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Temburong</option>
                                <option value="amo">Amo</option>
                                <option value="bangar">Bangar</option>
                                <option value="batu apoi">Batu Apoi</option>
                                <option value="bokok">bokok</option>
                                <option value="rambai">Rambai</option>
                                <option value="labu">Labu</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">1:00pm</td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Brunei-Muara</option>
                                <option value="berakas">Berakas</option>
                                <option value="burong pingai ayer">Burong Pingai Ayer</option>
                                <option value="gadong">Gadong</option>
                                <option value="kianggeh">Kianggeh</option>
                                <option value="kilanas">Kilanas</option>
                                <option value="kota batu">Kota Batu</option>
                                <option value="lumapas">Lumapas</option>
                                <option value="mentiri">Mentiri</option>
                                <option value="pangkalan batu">Pangkalan Batu</option>
                                <option value="peramu">Peramu</option>
                                <option value="saba">Saba</option>
                                <option value="sengkurong">Sengkurong</option>
                                <option value="serasa">Serasa</option>
                                <option value="sungai kebun">Sungai Kebun</option>
                                <option value="tamoi">Tamoi</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Belait</option>
                                <option value="bukit sawat">Bukit Sawat</option>
                                <option value="kuala balai">Kuala Balai</option>
                                <option value="kuala belait">Kuala Belait</option>
                                <option value="labi">Labi</option>
                                <option value="sukang">Sukang</option>
                                <option value="seria">Seria</option>
                                <option value="melilas">Melilas</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Tutong</option>
                                <option value="keriam">Keriam</option>
                                <option value="kiudang">Kiudang</option>
                                <option value="lamunin">Lamunin</option>
                                <option value="pekan tutong">Pekan Tutong</option>
                                <option value="rambai">Rambai</option>
                                <option value="tanjong maya">Tanjong Maya</option>
                                <option value="telisai">Telisai</option>
                                <option value="ukong">Ukong</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Temburong</option>
                                <option value="amo">Amo</option>
                                <option value="bangar">Bangar</option>
                                <option value="batu apoi">Batu Apoi</option>
                                <option value="bokok">bokok</option>
                                <option value="rambai">Rambai</option>
                                <option value="labu">Labu</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="align-middle">3:00pm</td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Brunei-Muara</option>
                                <option value="berakas">Berakas</option>
                                <option value="burong pingai ayer">Burong Pingai Ayer</option>
                                <option value="gadong">Gadong</option>
                                <option value="kianggeh">Kianggeh</option>
                                <option value="kilanas">Kilanas</option>
                                <option value="kota batu">Kota Batu</option>
                                <option value="lumapas">Lumapas</option>
                                <option value="mentiri">Mentiri</option>
                                <option value="pangkalan batu">Pangkalan Batu</option>
                                <option value="peramu">Peramu</option>
                                <option value="saba">Saba</option>
                                <option value="sengkurong">Sengkurong</option>
                                <option value="serasa">Serasa</option>
                                <option value="sungai kebun">Sungai Kebun</option>
                                <option value="tamoi">Tamoi</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Belait</option>
                                <option value="bukit sawat">Bukit Sawat</option>
                                <option value="kuala balai">Kuala Balai</option>
                                <option value="kuala belait">Kuala Belait</option>
                                <option value="labi">Labi</option>
                                <option value="sukang">Sukang</option>
                                <option value="seria">Seria</option>
                                <option value="melilas">Melilas</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Tutong</option>
                                <option value="keriam">Keriam</option>
                                <option value="kiudang">Kiudang</option>
                                <option value="lamunin">Lamunin</option>
                                <option value="pekan tutong">Pekan Tutong</option>
                                <option value="rambai">Rambai</option>
                                <option value="tanjong maya">Tanjong Maya</option>
                                <option value="telisai">Telisai</option>
                                <option value="ukong">Ukong</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                        <td>
                            <select name="mukim" class="form-control">
                                <option value="">Temburong</option>
                                <option value="amo">Amo</option>
                                <option value="bangar">Bangar</option>
                                <option value="batu apoi">Batu Apoi</option>
                                <option value="bokok">bokok</option>
                                <option value="rambai">Rambai</option>
                                <option value="labu">Labu</option>
                                <option value="public holiday">Public Holiday</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
