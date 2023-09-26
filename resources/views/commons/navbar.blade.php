<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between">

    <div class="hidden sm:-my-px sm:ml-10 sm:flex ">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white !no-underline !decoration-5 text-[22px]"
            style="text-decoration: none; border: none;">
            <div class="ss" style="padding: 12px o; color:#db0e30; font-weight:900; font-size: 1.5rem; ">
                {{ 'Admin Panel' }}</div>
        </x-nav-link>

    </div>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>@auth
                                 
                                <div>{{ Auth::user()->name }}</div>
                            
                            @endauth
                        </div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile ') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </ul>
</nav>
