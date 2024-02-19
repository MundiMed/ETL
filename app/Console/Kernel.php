<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
//use App\Console\Commands\CallETL;
use App\Http\Controllers\ImportController;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        //*
        $schedule->call(function () {
            $controller = resolve(ImportController::class);
            $controller->index();
        })->everyTwoMinutes(); //->dailyAt('11:40');
        //*/
        //$schedule->command(CallETL::class)->everyTwoMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
