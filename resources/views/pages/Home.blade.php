@extends('dashboard')
@section('content')
<div class="home" style=" height: 91vh; position: sticky;">


    <h1>Welcome, <div>{{ Auth::user()->name }}</div>
    </h1></div>
@endsection
