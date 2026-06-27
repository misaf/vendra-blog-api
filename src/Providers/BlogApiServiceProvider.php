<?php

declare(strict_types=1);

namespace Misaf\VendraBlogApi\Providers;

use Illuminate\Foundation\Console\AboutCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class BlogApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('vendra-blog-api')
            ->hasRoute('api');
    }

    public function packageBooted(): void
    {
        AboutCommand::add('Vendra Blog API', fn() => ['Version' => 'dev-master']);
    }
}
