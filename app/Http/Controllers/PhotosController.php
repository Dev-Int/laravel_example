<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use Illuminate\Contracts\View\View;

final class PhotosController extends Controller
{
    public function create(): View
    {
        return \view('pages.photos.create');
    }

    public function store(ImagesRequest $request): View
    {
        $request->image->store(config('images.path'), 'public');

        return view('pages.photos.show');
    }
}
