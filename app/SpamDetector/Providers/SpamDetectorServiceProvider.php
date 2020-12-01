<?php

namespace App\SpamDetector\Providers;

use App\SpamDetector\View\Components\SpamDetectorComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SpamDetectorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge our config with Ioc container.
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/spam.php', 'spam');
    }

    public function boot()
    {
        // Because we moving the our component place we need to append our spam component to the container.
        Blade::component(
            'spam-detector',
            SpamDetectorComponent::class
        );
    }
}