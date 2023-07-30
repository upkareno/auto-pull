<?php
namespace Upkareno\AutoPull\Controllers;

use Upkareno\AutoPull\AutoPull;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class AutoPullController {

    public function auto_pull( Request $request ) {
        if ( $request->authorization == env( 'HOOK_AUTHORIZATION' ) ) {
            $process = new Process( [ 'git', 'pull' ] );
            $process->run();
            echo $process->getOutput();
        } else {
            return 'Not authorized';
        }

    }

}