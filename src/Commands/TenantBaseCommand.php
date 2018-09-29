<?php
namespace Envive\TenantMigrate\Commands;

use Config;
use DB;
use Illuminate\Console\Command;

class TenantBaseCommand extends Command
{
	protected $command;
	 /* Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        Config::set('database.connections.tenant', config('tenant.connection'));
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tenant = $this->argument('tenant');
        if (config('tenant.tenant_prefix')){
            $tenant = config('tenant.tenant_prefix').$tenant;
        }
        Config::set('database.connections.tenant.database', $tenant);
        //check tenant database exist
        try {
            DB::connection('tenant')->getPdo();
        } catch (\Exception $e) {
            $this->error("Tenant database does not exist!!!");
            return;
        }
        $arguments = collect($this->options())->map(function($value,$option){
            return ['--'.$option => $value];
        })->collapse()->toArray();
        $arguments['--database'] = 'tenant';
        $this->call($this->command, $arguments);
    }
}