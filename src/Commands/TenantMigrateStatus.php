<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrateStatus extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate:status
                            {tenant : The tennat name}
                            {--path= : The path of migrations files to use.}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the status of each migration with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate:status';
    }
}
