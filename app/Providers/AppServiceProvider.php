<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureModels();
        $this->configureDates();
    }

    private function configureModels(): void
    {
        Model::unguard();

        Model::shouldBeStrict();

        Model::automaticallyEagerLoadRelationships();
    }

    private function configureDates(): void
    {
        Date::use(CarbonImmutable::class);
    }
}
