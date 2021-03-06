<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        \PaginateRoute::registerMacros();

        parent::boot();
    }


    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        //$this->mapDomainRoutes();

        $this->mapWebRoutes();

        //$this->mapApiRoutes();

        //
    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'domain' => 'www.sarahrenner.work'
        ], function ($router)
        {
            require base_path('routes/web.php');
        });
    }


    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        // Mapped to another module at Modules/Api
    }


    /**
     * Define the "domain" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapDomainRoutes()
    {
        //require base_path('routes/domain.php');
    }
}
