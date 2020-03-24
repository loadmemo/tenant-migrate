<?php

namespace Envive\TenantMigrate\Commands;

class TenantMigrateFresh extends TenantBaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:migrate:fresh
                            {tenant : The tennat name}
                            {--force : Force the operation to run when in production.}
                            {--path= : The path of migrations files to be executed.}
                            {--seed : Indicates if the seed task should be re-run.}
                            {--seeder : The class name of the root seeder.}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables and re-run all migrations with multi-tenant support';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->command = 'migrate:fresh';
    }
}
