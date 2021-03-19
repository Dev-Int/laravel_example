@extends('base')

@section('title', 'About us | ' . config('app.name'))

@section('content')
    <img src="{{ asset('img/photo.jpeg') }}" alt="Mon logo" class="rounded-full shadow-md my-12">

    <h2 class="text-gray-700 mb-5">
        Built with <span class="text-pink-500">&hearts;</span> by Dev-Int.
    </h2>

    <p>
        <a href="{{ route('app_home') }}" class="text-indigo-500 hover:text-indigo-600 underline">
            Revenir à l'accueil
        </a>
    </p>
@endsection
