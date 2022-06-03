<?php

namespace App\Providers;

use App\Listeners\SendWebSocketConnection;
use App\Listeners\SendWebSocketDisconnection;
use App\Listeners\SendWebSocketChannelSubscribed;
use App\Listeners\SendWebSocketChannelUnubscribed;
use BeyondCode\LaravelWebSockets\Events\NewConnection;
use BeyondCode\LaravelWebSockets\Events\SubscribedToChannel;
use BeyondCode\LaravelWebSockets\Events\UnsubscribedFromChannel;
use BeyondCode\LaravelWebSockets\Events\ConnectionClosed;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NewConnection::class => [
            SendWebSocketConnection::class,
        ],
        SubscribedToChannel::class => [
            SendWebSocketChannelSubscribed::class,
        ],
        UnsubscribedFromChannel::class => [
            SendWebSocketChannelUnubscribed::class,
        ],
        ConnectionClosed::class => [
            SendWebSocketDisconnection::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // 
    }
}
