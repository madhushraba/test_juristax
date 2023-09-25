@extends('dashboard')
@section('content') 
<div class="container"  >
    <h1>User List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            <tr>
                <td>{{ Auth::user()->id}}</td>
                <td>{{ Auth::user()->name }}</td>
                {{-- <td>{{ $user->name }}</td> --}}
                {{-- <td>{{ $user->email }}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
 
