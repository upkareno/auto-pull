<?php
namespace Upkareno\AutoPull\Providers;

use Illuminate\Support\ServiceProvider;
use Upkareno\AutoPull\PublishesMigrations;

class AutoPullProvider extends ServiceProvider {
    use PublishesMigrations;
    /**
    * Bootstrap the application services.
    *
    * @return void
    */

    public function boot() {
        $this->loadRoutesFrom( __DIR__ . '/../routes/web.php' );
        $this->registerMigrations( __DIR__ . '/../database/migrations' );
        // register commands
        $this->commands( [
            \Upkareno\AutoPull\Commands\Reporter::class,
            \Upkareno\AutoPull\Commands\CreateReporter::class,
        ] );

    }
}
