<?php

namespace Pixeo\Settings;

class SettingServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/settings.php' => config_path('settings.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSettings();
    }

    protected function registerSettings(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/settings.php', 'settings');

        $this->app->singleton('settings', function ($app) {
            return $app['cache']->rememberForever('site.settings', function () {
                $class = $this->app['config']->get('settings.model');
                return $class::all()->pluck('value', 'key');
            });
        });
    }
}
