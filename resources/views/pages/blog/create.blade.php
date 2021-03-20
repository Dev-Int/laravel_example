@extends('layouts.base')

@section('content')
    <h1>Nouvel article</h1>

    <form action="{{ url('blogs') }}" method="POST" class="w-1/2 flex flex-col justify-between h-full">
        @csrf
        <div class="mt-6">
            <label for="title" class="sr-only">Titre de l'article</label>
            <input id="title" name="title" type="text" placeholder="Titre de l'article" value="{{ old('title') }}"
                   class="rounded p-2 min-w-full border border-gray-400 shadow-inner mt-2 @error('title') is-invalid @enderror">
            @error('title')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-6">
            <label for="content" class="sr-only">Contenu de l'article</label>
            <textarea id="content" name="content" placeholder="Contenu de l'article"
                      class="rounded p-2 w-full block border border-gray-400 shadow-inner mt-2 @error('content') is-invalid @enderror" rows="10"
            >{{ old('content') }}</textarea>
            @error('content')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-6">
            <input class="rounded min-w-full p-2" type="submit" value="Enregistrer">
        </div>
    </form>
@endsection
