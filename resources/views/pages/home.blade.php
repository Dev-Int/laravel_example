@extends('base')

@section('content')
    <img src="{{ asset('img/logo.gif') }}" alt="Bretagne Flag" class="rounded shadow-md h-32 mt-12">

    <h1 class="text-gray-900 text-3xl sm:text-5xl font-semibold mt-5">Hello from Brittany !</h1>

    <p class="text-gray-800 text-lg">It's currently {{ date('h:i A') }}.</p>
@endsection
