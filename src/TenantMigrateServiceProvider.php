<?php

namespace Envive\TenantMigrate;

use Envive\TenantMigrate\Commands\TenantMigrate;
use Envive\TenantMigrate\Commands\TenantMigrateFresh;
use Envive\TenantMigrate\Commands\TenantMigrateInstall;
use Envive\TenantMigrate\Commands\TenantMigrateRefresh;
use Envive\TenantMigrate\Commands\TenantMigrateReset;
use Envive\TenantMigrate\Commands\TenantMigrateRollBack;
use Envive\TenantMigrate\Commands\TenantMigrateStatus;
use Illuminate\Support\ServiceProvider;

class TenantMigrateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/tenant.php' => config_path('tenant.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->commands([
                TenantMigrate::class,
                TenantMigrateFresh::class,
                TenantMigrateInstall::class,
                TenantMigrateRefresh::class,
                TenantMigrateReset::class,
                TenantMigrateRollBack::class,
                TenantMigrateStatus::class,
            ]);
        }
    }
}
