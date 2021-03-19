@extends('base')

@section('title', 'About us | ' . config('app.name'))

@section('content')
    <img src="{{ asset('img/photo.jpeg') }}" alt="Mon logo">

    <p>Built with &hearts; by Dev-Int.</p>
    <p><a href="{{ route('app_home') }}">Revenir à l'accueil</a></p>
@endsection
