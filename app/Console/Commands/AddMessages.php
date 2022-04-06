<?php

namespace App\Console\Commands;

use App\Events\NewMessage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;

class AddMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wh:add-message {--channel=} {--counts=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send number of messages through websocket.';

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
     * @return int
     */
    public function handle()
    {
        $channel = $this->option('channel');
        $counts = $this->option('counts');
        NewMessage::dispatch("hello sir",$channel,$counts);
    }
}
