<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrateReset extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate:reset
                            {tenant : The tennat name}
                            {--force : Force the operation to run when in production.}
                            {--path= : The path(s) of migrations files to be executed.}
                            {--pretend : Dump the SQL queries that would be run.}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback all database migrations with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate:reset';
    }
}
