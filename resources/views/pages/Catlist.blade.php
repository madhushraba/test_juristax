@extends('dashboard')
@section('content') 
<div class="container"  >
    <h1> Add category</h1>
    <table class="table">
        <thead>
            <tr>
                <th>cat </th>
                <th>Name</th>
                <th>more</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            <tr>
                <td>{{ Auth::user()->id}} + 00</td>
                <td>{{ Auth::user()->name }}</td>
                <td>madhu</td>
                {{-- <td>{{ $user->name }}</td> --}}
                {{-- <td>{{ $user->email }}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
 