@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th scope="col" colspan="3" class="text-center">User Dashboard</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User's Checklist</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Upload Bluecard</td>
            <td class="text-center">
                @if (count($user->bluecards)>0)
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    @else
                    <a class="btn btn-primary btn-md" href="/bluecards/create" role="button">Upload Your Bluecard</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Upload Insurance</td>
            <td class="text-center">
                @if (count($user->insurances)>0)
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    @else
                    <a class="btn btn-primary btn-md" href="/insurances/create" role="button">Upload Your Insurance</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Approval From Admin</td>
            <td class="text-center">
                {{-- @if (count($user->roadtaxes) > 0 && $approve !== 1)
                    <p>Pending</p>

                    @if (count($user->roadtaxes) > 0 && $approve == 1)
                        <p>Approved!</p>

                        @if (count($user->roadtaxes) > 0 && $approve == 3)
                            <p>Rejected!</p>
                        @endif
                    @endif

                    @else

                    <p>You haven't send your records yet!</p>
                @endif --}}

                @if (count($user->roadtaxes) > 0)
                    @foreach ($user->roadtaxes as $roadtax)

                    @endforeach

                    <h5>{{ $roadtax->approval }}</h5>
                @endif
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Payment</td>
            <td>

            </td>
        </tr>
    </table>
</div>
@endsection
