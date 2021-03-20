<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PhotosRepositoryInterface;
use App\Http\Requests\ImagesRequest;
use Illuminate\Contracts\View\View;

final class PhotosController extends Controller
{
    public function create(): View
    {
        return \view('pages.photos.create');
    }

    public function store(ImagesRequest $request, PhotosRepositoryInterface $photosRepository): View
    {
        $photosRepository->save($request->image);

        return view('pages.photos.show');
    }
}
