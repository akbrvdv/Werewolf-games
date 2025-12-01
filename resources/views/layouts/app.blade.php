<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Werewolf Game') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-900 text-gray-100 selection:bg-purple-500 selection:text-white">
        <div class="fixed inset-0 z-[-1]">
            <img src="https://images.unsplash.com/photo-1511447333015-45b65e60f6d5?q=80&w=2000&auto=format&fit=crop" 
                 alt="Dark Forest" 
                 class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-purple-900/40"></div>
        </div>

        <div class="min-h-screen flex flex-col">
            @include('layouts.navigation')

            @if (isset($header))
                <header class="backdrop-blur-md bg-black/30 border-b border-white/10 shadow-lg">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-['Cinzel'] text-3xl text-purple-200 leading-tight drop-shadow-lg">
                            {{ $header }}
                        </h2>
                    </div>
                </header>
            @endif

            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>