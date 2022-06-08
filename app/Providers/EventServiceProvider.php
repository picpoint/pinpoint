<?php

namespace App\Providers;

use App\Events\CreatePinEvent;
use App\Events\MessageCreateEvent;
use App\Listeners\CreatePinEventNotification;
use App\Listeners\MessageCreateNotificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        CreatePinEvent::class => [
            CreatePinEventNotification::class
        ],

        MessageCreateEvent::class => [
            MessageCreateNotificationListener::class
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
