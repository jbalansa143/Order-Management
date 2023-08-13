<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fill';

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
        
        $this->info('Data has been loaded succesfuly');
    }
}
