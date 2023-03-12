<?php

namespace NoahWilderom\LaravelMollieSubscriptions;

use NoahWilderom\LaravelMollieSubscriptions\Commands\LaravelMollieSubscriptionsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMollieSubscriptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mollie-subscriptions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-mollie-subscriptions_table')
            ->hasCommand(LaravelMollieSubscriptionsCommand::class);
    }
}
