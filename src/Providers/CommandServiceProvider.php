<?php

declare(strict_types=1);

namespace Zahzah\ModuleDistribution\Providers;

use Illuminate\Support\ServiceProvider;
use Zahzah\ModuleDistribution\Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
        Commands\InstallMakeCommand::class,
    ];


    public function register(){
        $this->commands(config('module-distribution.commands',$this->commands));
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */

    public function provides()
    {
        return $this->commands;
    }
}
