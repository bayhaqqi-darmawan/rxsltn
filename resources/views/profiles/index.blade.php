@extends('layouts.app')

@section('content')

    

    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Your Profile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">User Name</th>

                <td>{{ Auth::user()->username }}</td>
            </tr>
            <tr>
                <th scope="row">Full Name</th>
                <td>{{ Auth::user()->fullname }}</td>
            </tr>
            <tr>
                <th scope="row">Ic - Number</th>
                <td>{{ Auth::user()->ic_number }}</td>
            </tr>
            <tr>
                <th scope="row">Phone Number</th>
                <td>{{ Auth::user()->phone_number }}</td>
            </tr>
            <tr>
                <th scope="row">Address</th>
                <td>{{ Auth::user()->address }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ Auth::user()->email }}</td>
            </tr>
        </tbody>
    </table>
@endsection
