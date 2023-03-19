<?php

namespace Takiwos\YegaraSms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Takiwos\YegaraSms\Commands\YegaraSmsCommand;

class YegaraSmsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-yegara-sms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-yegara-sms_table')
            ->hasCommand(YegaraSmsCommand::class);
    }
}
