<?php

namespace L5SwaggerBootStrapUi;

use File;
use Illuminate\Support\ServiceProvider;

class L5SwaggerBootStrapUiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $blade=config('l5-swagger.paths.views') . '/index.blade.php';
            if (File::exists($blade)) {
                File::delete($blade);
            }
        }
        $viewPath = __DIR__ . '/../resources/views';
        $this->loadViewsFrom($viewPath, 'l5-swagger-ui');

        //Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => config('l5-swagger.paths.views'),
        ], 'views');

        //Include routes
        \Route::group([ 'namespace' => 'L5SwaggerBootStrapUi' ], function ($router) {
            require __DIR__ . '/routes.php';
        });

    }
}
