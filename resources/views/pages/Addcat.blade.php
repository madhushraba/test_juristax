@extends('dashboard')
@section('content')
    <div class="testim">
       

        <form method="post" action="{{ route('storeCategory') }}">
            @csrf
            <div class="form-group" style="display: flex;flex-direction: column; align-items: center; ">

                <h1>Add Category</h1>


                <label for="name">Enter Category Name:</label>
                <input type="text" name="name" id="name"
                    style="
        border-radius: 1rem; margin: 1rem;" required>



                <button type="submit"
                    style="padding: 1rem;  
        margin: 1rem;
        background-color: #ee0c32; 
        border: 2px solid red;
        border-radius: 1rem;
        color:white">Submit
                    Category </button>
        </form>
    </div>
@endsection
