<?php

namespace App\Http\Repositories;

use Illuminate\Http\UploadedFile;

final class PhotosRepository implements PhotosRepositoryInterface
{
    public function save(UploadedFile $image): void
    {
        $image->store(config('images.path'), 'public');
    }
}
