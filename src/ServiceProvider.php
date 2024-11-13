<?php
declare(strict_types=1);

namespace Flynn314\Pint;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../pint.json' => base_path('pint.json'),
            ], 'laravel-assets');
        }
    }
}
