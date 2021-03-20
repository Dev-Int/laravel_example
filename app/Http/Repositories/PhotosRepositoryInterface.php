<?php

namespace App\Http\Repositories;

use Illuminate\Http\UploadedFile;

interface PhotosRepositoryInterface
{
    public function save(UploadedFile $image): void;
}
