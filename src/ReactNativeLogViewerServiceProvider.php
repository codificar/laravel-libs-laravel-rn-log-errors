<?php

namespace Codificar\ReactNativeLogErrors;

use Illuminate\Support\ServiceProvider;

class ReactNativeLogErrorsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}