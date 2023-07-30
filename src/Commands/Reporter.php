<?php

namespace Upkareno\AutoPull\Commands;

use Illuminate\Console\Command;

class Reporter extends Command {
    /**
    * The name and signature of the console command.
    *
    * @var string
    */
    protected $signature = 'config:database';

    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Command description';

    /**
    * Execute the console command.
    *
    * @return int
    */

    public function handle() {
        // save a user to the database
        $user = new \Upkareno\AutoPull\Models\PullReporterUser();
        $user->name = 'John Doe';
        $user->email = 'mohamed1999250@gmail.com';
        $user->save();

        // show message
        $this->info( 'User saved successfully.' );
        return 0;
    }
}
