<?php

namespace App\Listeners;


use Illuminate\Support\Facades\Log;
use BeyondCode\LaravelWebSockets\Events\UnsubscribedFromChannel;

class SendWebSocketChannelUnubscribed
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
     * @param  \BeyondCode\LaravelWebSockets\Events\UnsubscribedFromChannel;  $event
     * @return void
     */
    public function handle(UnsubscribedFromChannel $event)
    {
        Log::info("In SendWebSocketChannelUnubscribed");
        Log::info(json_encode($event));
    }
}
