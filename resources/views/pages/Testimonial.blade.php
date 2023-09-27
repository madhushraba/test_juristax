@extends('dashboard')
@section('content')
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Testimonial Reviews') }}
        </h2>
 
    </header>

    <form id="send-verification" method="post" action="{{ route('home') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name ')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" 
            {{-- :value="old('name', $user->name)"  --}}
            required autofocus autocomplete="name" />
            <x-input-error  class="mt-2" :messages="$errors->get('name')" />

        </div>

        <div>
            <x-input-label for="email" :value="__('Review')" />
            <textarea id="email" name="email" type="email" class="mt-1 block w-full"
             {{-- :value="old('email', $user->email)"  --}}
             required autocomplete="username" ></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

             
        </div>



      
        <div>
            <x-input-label for="displaypic" :value="__('Upload Picture')" />
            <x-text-input id="displaypic" name="displaypic" type="file" class="mt-1 block w-full" :value="old('displaypic',)"   
             {{-- $user->displaypic --}}
          
             
             required autofocus autocomplete="displaypic" />
            <x-input-error class="mt-2" :messages="$errors->get('displaypic')" />
        </div>



        <div class="flex items-center gap-4">
            <x-danger-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

@endsection










