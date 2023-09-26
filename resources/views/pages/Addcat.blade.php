@extends('dashboard')
@section('content')
    <div class="testim">
        <h1>Add Category</h1>

        <form method="post"
         action="{{ route('storeCategory') }}"
         >
            @csrf 
            <div class="form-group">
                <label for="name">Enter Category Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection
