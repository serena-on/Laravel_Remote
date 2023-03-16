<?php

namespace Serenaon\User;

use Serenaon\User\Commands\UserCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('user-management')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_user-management_table')
            ->hasCommand(UserCommand::class);
    }
}
