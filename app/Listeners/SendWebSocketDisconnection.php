<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use BeyondCode\LaravelWebSockets\Events\ConnectionClosed;

class SendWebSocketDisconnection
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
     * @param  \BeyondCode\LaravelWebSockets\Events\ConnectionClosed;  $event
     * @return void
     */
    public function handle(ConnectionClosed $event)
    {
        Log::info("In SendWebSocketDisconnection");
        Log::info(json_encode($event));
    }
}
