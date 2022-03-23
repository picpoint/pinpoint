<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class NewMessageCreatedNotification implements ShouldQueue
{

    protected $signature = 'redis:subscribe';
    protected $description = 'Подписка в Redis канал';

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
     * @param  MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {

        $this->event = $event;

        Redis::subscribe(['test-channel'], function ($message) {
            echo $message;

            dump($message);
            dump($this->event);
        });

        dump($event);

    }
}
