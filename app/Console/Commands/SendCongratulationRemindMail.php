<?php

namespace App\Console\Commands;

use App\Jobs\CongratulationRemind;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendCongratulationRemindMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'congratulation:remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dispatch(new CongratulationRemind());
    }
}
