<?php

namespace Karabin\Confetti;

use Karabin\Confetti\Commands\ConfettiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ConfettiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-confetti')
            ->hasConfigFile();
        // ->hasViews()
        // ->hasMigration('create_laravel-confetti_table')
        // ->hasCommand(ConfettiCommand::class);
    }
}
