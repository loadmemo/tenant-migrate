<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrate extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate
                            {tenant : The tennat name}
                            {--force : Force the operation to run when in production.}
                            {--path= : The path of migrations files to be executed.}
                            {--pretend : Dump the SQL queries that would be run.}
                            {--seed : Indicates if the seed task should be re-run.}
                            {--step : Force the migrations to be run so they can be rolled back individually.}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the database migrations with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate';
    }
}
