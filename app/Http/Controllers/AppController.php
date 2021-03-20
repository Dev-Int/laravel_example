<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class AppController extends Controller
{
    public function index(): View
    {
        return view('pages.home');
    }
}
