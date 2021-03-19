@extends('base')

@section('content')
    <img src="{{ asset('img/logo.gif') }}" alt="Bretagne Flag">

    <h1>Hello from Brittany !</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
