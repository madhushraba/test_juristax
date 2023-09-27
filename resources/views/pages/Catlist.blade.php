@extends('dashboard')
@section('content') 
<div class="container">
    <h1>Category List</h1>
    <table   id="dataTable" class="table">
        <thead>
            <tr>
                {{-- <td>{{ $category->name }}</td> --}}
                <td>hello</td>
            </tr> 
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                {{-- <td>438597</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
