<?php

namespace App\Providers;

use App\Http\Repositories\PhotosRepository;
use App\Http\Repositories\PhotosRepositoryInterface;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            PhotosRepositoryInterface::class,
            PhotosRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
