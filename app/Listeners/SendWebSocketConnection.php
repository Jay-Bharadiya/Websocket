<?php

namespace App\Listeners;


use Illuminate\Support\Facades\Log;
use BeyondCode\LaravelWebSockets\Events\NewConnection;

class SendWebSocketConnection
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
     * @param  \BeyondCode\LaravelWebSockets\Events\NewConnection;  $event
     * @return void
     */
    public function handle(NewConnection $event)
    {
        Log::info("In SendWebSocketConnection");
        Log::info(json_encode($event));
    }
}
