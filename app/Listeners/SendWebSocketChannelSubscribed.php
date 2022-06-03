<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use BeyondCode\LaravelWebSockets\Events\SubscribedToChannel;

class SendWebSocketChannelSubscribed
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \BeyondCode\LaravelWebSockets\Events\SubscribedToChannel;  $event
     * @return void
     */
    public function handle(SubscribedToChannel $event)
    {
        Log::info("In SendWebSocketChannelSubscribed");
        Log::info(json_encode($event));
    }
}
