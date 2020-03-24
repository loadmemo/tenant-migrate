<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrateInstall extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate:install
                            {tenant : The tennat name}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the migration repository with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate:install';
    }
}
