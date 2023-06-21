<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Acamposm\Ping\Ping;
use Acamposm\Ping\PingCommandBuilder;

class PingAntena extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test pour le ping d\une antenne';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Create an instance of PingCommand
        $command = (new PingCommandBuilder('10.9.9.59'))->timeout(160);
        // Pass the PingCommand instance to Ping and run...
        $ping = (new Ping($command))->run();
        dd($ping);
        return $ping;
    }
}
