<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="flex flex-col justify-between min-h-screen items-center py-6">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{ date('Y') }}
                @if(!\Illuminate\Support\Facades\Route::is('app_about'))
                &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('app_about') }}">About us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
