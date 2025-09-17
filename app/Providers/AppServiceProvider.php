<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Default login route override (biar gak error)
        Route::get('/login', function () {
            return response()->json(['message' => 'Unauthenticated. Please login via API.'], 401);
        })->name('login');
    }
}
