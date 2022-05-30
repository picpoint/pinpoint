<?php

namespace App\Listeners;

use App\Events\CreatePinEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreatePinEventNotification
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
     * @param  CreatePinEvent  $event
     * @return void
     */
    public function handle(CreatePinEvent $event)
    {
        dd($event->msgNotification);
    }
}
