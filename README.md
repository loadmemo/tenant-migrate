# Tenant-migrate
Add multi-tenant support for Laravel migrate command

# Installation
``` bash
composer require envive/tenant-migrate
```
## Automatic service registration

Using [auto discovery](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518), the
tenancy package will be auto detected by Laravel automatically. 

### Manual service registration

In case you want to disable webserver integration or prefer manual integration, 
set the `dont-discover` in your application composer.json, like so:

```json
{
    "extra": {
        "laravel": {
            "dont-discover": "envive/tenant-migrate"
        }
    }
}
```

If you disable auto discovery you are able to configure the providers by yourself.

Register the service provider in your `config/app.php`:

```php
    'providers' => [
        // [..]
        // Tenant migrate.
         Envive\TenantMigrate\TenantMigrateServiceProvider::class,
    ],
```

## Deploy configuration

Publish the configuration file so you can modify it to your needs:

``` bash
 php artisan vendor:publish --provider=Envive\\TenantMigrate\\TenantMigrateServiceProvider
```
Open the `config/tenant.php` file and modify to your needs. Put your tenant database connection information into the `connection` and add `tenant_prefix` if needed.

This package will add seven commands below into your artisan list. You can get more information with option `help`.
```yaml
  tenant:migrate           Run the database migrations with multi-tenant support
  tenant:migrate:fresh     Drop all tables and re-run all migrations with multi-tenant support
  tenant:migrate:install   Create the migration repository with multi-tenant support
  tenant:migrate:refresh   Reset and re-run all migrations with multi-tenant support
  tenant:migrate:reset     Rollback all database migrations with multi-tenant support
  tenant:migrate:rollback  Rollback the last database migration with multi-tenant support
  tenant:migrate:status    Show the status of each migration with multi-tenant support
```
