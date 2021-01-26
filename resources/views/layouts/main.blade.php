<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @if (Route::has('login'))
            <div class="h-16 bg-white w-full ">
            <div class="py-4 flex container px-4 mx-auto flex-row justify-between">

                <div class="font-bold text-indigo-600">
                    <a href="/">Events Listing</a>
                </div>

                <div>
                @auth
                @if(auth()->user()->is_admin)
                    <a href="{{route('admin.events.index') }}" class="text-sm text-gray-700">Admin Dashboard</a>
                @endif
                 <!-- Authentication -->
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
                    @endif
                @endauth
                </div>
            </div>
            </div>
        @endif
        <div>
            <!-- Page Content -->
            <main class="pl-5 pr pr-5">
                @yield('content')
            </main>
        </div>
    </div>

        @livewireScripts
    </body>
</html>
