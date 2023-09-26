@extends('dashboard')
@section('content')
<div class="container">
    <h1>Category List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
