<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CallETL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:call-e-t-l';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = resolve(ImportController::class);
        $controller->index();
    }
}
