@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th scope="col" colspan="4" class="text-center">User List</th>
            </tr>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">IC -Number</th>
                <th scope="col">Created at</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>

                @if(count($users)> 0)
                    @foreach($users as $user)
                    <tr>
                        @if ($user->role !== 'admin')
                        <td>
                        <a href="/admins/{{$user ->ic_number}}">{{$user->username}}</a>
                        </td>
                        <td>
                            {{$user->ic_number}}
                        </td>
                        <td>
                            {{$user->created_at}}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="#" role="button">Approve!</a>
                        </td>
                        @endif
                    @endforeach
                @endif
            </tr>
        </table>


    </div>
@endsection
