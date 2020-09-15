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
            <th scope="col">Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Upload Bluecard</td>
            <td>
                @if ($bluecards)
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    @else
                    <a class="btn btn-primary btn-md" href="/bluecards/create" role="button">Upload Your Bluecard</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Upload Insurance</td>
            <td>
                @if ($insurances)
                    <img src="https://img.icons8.com/office/40/000000/checked-2--v1.png"/>

                    @else
                    <a class="btn btn-primary btn-md" href="/insurances/create" role="button">Upload Your Insurance</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Approval From Admin</td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Payment</td>
            <td>
                {{-- <form action="{{ url('charge') }}" method="post">
                    <input type="text" name="amount" />
                    {{ csrf_field() }}
                    <input type="submit" name="submit" value="Pay Now">
                </form> --}}
            </td>
        </tr>
    </table>
</div>
@endsection
