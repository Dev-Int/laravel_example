@extends('layouts.base')

@section('content')
    <h1>Envoi d'une photo</h1>

    <form action="{{ url('photos') }}" method="POST" enctype="multipart/form-data" class="w-1/2 flex flex-col justify-between h-full">
        @csrf
        <div class="mt-6">
            <label for="image" class="sr-only">Choisissez un fichier</label>
            <input id="image" name="image" type="file"
                   class="rounded p-2 min-w-full border border-gray-400 shadow-inner mt-2 @error('image') is-invalid @enderror">
            @error('image')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-6">
            <input class="rounded min-w-full p-2" type="submit" value="Envoyer">
        </div>
    </form>
@endsection
