<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View;

final class BlogController extends Controller
{
    public function show(int $id): View
    {
        return view('pages.posts.show')->with('number', $id);
    }

    public function create(): View
    {
        return view('pages.posts.create');
    }

    public function store(BlogRequest $request): string
    {
        $post = Post::create([
            'title' => $request->title,
            'post_content' => $request->post_content,
        ]);

        return 'Le titre de l\'article est ' . $post->title;
    }
}
