<?php

namespace App\Console;

use App\Console\Commands\UpdateBlockDataCommand;
use App\Console\Commands\UpdateMasternodesCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        UpdateBlockDataCommand::class,
        UpdateMasternodesCommand::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
         $schedule->command('update:masternodes')
             ->everyFifteenMinutes()
             ->withoutOverlapping()
             ->name('Update Masternodes');
    }

    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
