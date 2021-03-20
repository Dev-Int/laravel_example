<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class BlogController extends Controller
{
    public function show(int $id): View
    {
        return \view('pages.blog.show')->with('number', $id);
    }
}
