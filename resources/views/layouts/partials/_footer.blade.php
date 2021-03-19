<footer>
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y') }}
        @if(!\Illuminate\Support\Facades\Route::is('app_about'))
        &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('app_about') }}">About us</a>
        @endif
    </p>
</footer>
