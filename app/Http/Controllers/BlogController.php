<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Contracts\View\View;

final class BlogController extends Controller
{
    public function show(int $id): View
    {
        return view('pages.blog.show')->with('number', $id);
    }

    public function create(): View
    {
        return view('pages.blog.create');
    }

    public function store(BlogRequest $request): string
    {
        return 'Le titre de l\'article est ' . $request->input('title');
    }
}
