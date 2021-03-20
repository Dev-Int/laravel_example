@extends('layouts.base')

@section('content')
    <form action="{{ url('blogs') }}" method="POST" class="flex flex-col justify-between h-full">
        @csrf
        <div class="mt-6 grid grid-cols-2 gap-2">
            <label for="title">Titre de l'article</label>
            <input id="title" name="title" type="text" class="rounded border border-gray-400 shadow-inner mt-2">
        </div>
        <div class="mt-6 grid grid-cols-2 gap-2">
            <label for="content">Contenu de l'article</label>
            <textarea id="content" name="content" class="rounded border border-gray-400 shadow-inner mt-2" cols="25"></textarea>
        </div>
        <div class="mt-6">
            <input class="rounded min-w-full p-2" type="submit" value="Enregistrer">
        </div>
    </form>
@endsection
