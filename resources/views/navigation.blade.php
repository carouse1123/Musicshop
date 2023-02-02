<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('หน้าแรก') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('product') }}" :active="request()->routeIs('product')">
                        {{ __('เครื่องดนตรี') }}
                    </x-jet-nav-link>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    @auth
                        @include('navbar')
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>