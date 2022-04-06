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
    protected $signature = 'wh:add-message {--channel=} {--counts=} {--message=}';

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
        $message = $this->option('message');
        $startTime = date('Y-m-d H:i:s');
        $this->info("Start Time: ".$startTime);
        for($i = 0;$i < $counts; $i++){
            $this->info("======================================");
            $this->info("index :".($i + 1));
            NewMessage::dispatch($message,$channel,$counts);
            $sendTime = date('Y-m-d H:i:s');
            $this->info("Send Time: ".$sendTime);
            $interval = strtotime($sendTime) - strtotime($startTime);
            if($interval > 180){
                $this->info("Process Exit");
                exit();
            } else {
                $delay = rand(1,5);
                $this->info("Sleep for delay :".$delay);
                sleep($delay);
            }
            $this->info("======================================");
        }
    }
}
