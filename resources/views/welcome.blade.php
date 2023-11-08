@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/logo.png') }}">
        <title>Laravel Crud || Crud Mania</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

   
    </head>
    <body class="antialiased">
        <div class="position-relative d-flex justify-content-center align-items-center bg-dots-darker bg-center bg-gray-100 w-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="position-fixed top-0 end-0 p-3 text-end z-10">
                    @auth
                        <a href="{{ url('/index') }}" class="fw-bold text-decoration-none" style="color: grey">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="fw-bold text-decoration-none mx-2" style="color: grey">Log in</a>

                    @endauth
                </div>
            @endif

            <div style="min-height: 100vh" class="w-100 d-flex align-items-center justify-content-center">

                <h1 style="font-weight:bold;" >Crud App Using <span class="text-light bg-primary p-3 rounded">Laravel 10</span></h1>
            </div>
        </div>
    </body>
</html>
