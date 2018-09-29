<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrateRollback extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate:rollback
                            {tenant : The tennat name}
                            {--force : Force the operation to run when in production.}
                            {--path= : The path of migrations files to be executed.}
                            {--pretend : Dump the SQL queries that would be run.}
                            {--step : The number of migrations to be reverted.}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback the last database migration with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate:rollback';
    }
}
