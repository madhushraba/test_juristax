@extends('dashboard')
@section('content')
    <form method="POST" action="{{ route('store.enquiry') }}" style="  display: flex;flex-direction: column; align-items: center; ">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" style="
        border-radius: 1rem;" required>

        <label for="number">Number:</label> 
        <input type="text" name="number" style="
        border-radius: 1rem;" required>

        <label for="email">Email:</label>
        <input type="email" name="email" style="
        border-radius: 1rem;" required>

        <label for="message">Message:</label>
        <textarea name="message" rows="4" style="
        border-radius: 1rem;" required></textarea>

        <button type="submit" 
        style="padding: 1rem; 
        margin: 1rem;
        background-color: #ee0c32; 
        border: 2px solid red;
        border-radius: 1rem;
        color:white"
        
        >Submit
            Enquiry</button>
    </form>

@endsection