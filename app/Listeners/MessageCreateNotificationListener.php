<?php

namespace App\Listeners;

use App\Events\MessageCreateEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MessageCreateNotificationListener
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
     * @param  MessageCreateEvent  $event
     * @return void
     */
    public function handle(MessageCreateEvent $event)
    {
        dump($this->event = $event);
        dd($event->messageNotification);
    }
}
