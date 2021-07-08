<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     * This is used by Laravel authentication to redirect users after login.
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     * When present, controller route declarations will automatically be prefixed with this namespace.
     */
    protected $namespace = 'App\\Http\\Controllers';
    protected $apiV1Namespace = 'App\\Api\\V1\\Controllers';

    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->domain(config('app.domain'))
                ->prefix('v1')
                ->name('api.v1.')
                ->namespace($this->apiV1Namespace)
                ->group(base_path('routes/api_v1.php'));

            Route::middleware('web')
                ->domain(sprintf('docs.%s', config('app.domain')))
                ->namespace($this->namespace)
                ->name('docs.')
                ->group(base_path('routes/docs.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->domain(config('app.domain'))
                ->name('web.')
                ->group(base_path('routes/web.php'));
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
