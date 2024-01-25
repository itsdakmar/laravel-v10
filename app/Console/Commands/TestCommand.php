<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\info;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::debug('This is from test command!');
    }
}
