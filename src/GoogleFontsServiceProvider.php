<?php

namespace Apsonex\GoogleFonts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Apsonex\GoogleFonts\Commands\GoogleFontsCommand;

class GoogleFontsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('google-fonts')
            ->hasConfigFile();
    }
}
