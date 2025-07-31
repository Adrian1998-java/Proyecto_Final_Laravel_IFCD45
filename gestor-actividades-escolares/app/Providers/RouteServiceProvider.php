<?php

namespace App\Providers;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot()
    {

        $this->configureRateLimiting();
    
        $this->routes(function(){
            Route::prefix('api')
            ->group(base_path('routes/api.php'));
    
            require base_path('routes/web.php');
        });
    }
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request)
         {
            return Limit::perMinute(60)->by(
                optional($request->user())->id ?: $request-> ip()
            );
        });
    }
}


