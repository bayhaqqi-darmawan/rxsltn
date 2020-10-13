@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <table class="table table-bordered">
            <tr>
                <th scope="col" class="text-center" colspan="4">User List</th>
            </tr>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">IC -Number</th>
                <th scope="col">Created at</th>
                <th scope="col" class="text-center">Status</th>
            </tr>

                @if(count($users)> 0)
                    @foreach($users as $user)
                    <tr>
                        @if ($user->role !== 'admin')
                            <td scope="col">
                            <a href="/admins/{{$user ->ic}}">{{$user->username}}</a>
                            </td>
                            <td scope="col">
                                {{$user->ic}}
                            </td>
                            <td scope="col">
                                {{$user->created_at}}
                            </td>
                            <td scope="col" class="text-center">
                                @if (count($user->roadtaxes) > 0)
                                    @foreach ($user->roadtaxes as $roadtax)
                                        <h5>{{ $roadtax->approval }}</h5>
                                    @endforeach


                                    @else
                                        <h5>Not yet submitted</h5>
                                @endif
                            </td>
                        @endif
                    @endforeach
                @endif
            </tr>
        </table>
    </div>
@endsection
