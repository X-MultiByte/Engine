<?php

namespace XMultibyte\Engine;

use Illuminate\Support\ServiceProvider;
use XMultibyte\Engine\Console\Commands\InstallCommand;

class PageEngineServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    
    public function boot(): void
    {
        //
    }
    
    protected function registerCommands(): void
    {
        $this->commands([
            InstallCommand::class,
            PublishCommand::class,
        ]);
    }
    
    protected function registerPublishes(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/engine.php' => config_path('pe.php'),
            ], 'config');
            
        }
    }
}
