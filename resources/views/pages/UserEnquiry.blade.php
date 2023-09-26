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


    {{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Submit Enquiry') }}
        </h2>

        
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Name:')" />
            <x-text-input id="current_password" name="current_password" type='text' class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Number:')" />
            <x-text-input id="password" name="password" type='text' class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Email:')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type='text' class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Message:')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type='text' class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex items-center gap-4">
            <x-danger-button>{{ __('Save') }}</x-danger-button>

          
        </div>
    </form>
</section> --}}
@endsection
