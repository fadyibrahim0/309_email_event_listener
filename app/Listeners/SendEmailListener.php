<?php

namespace App\Listeners;

use App\Mail\DemoMail;
use App\Events\DemoEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailListener
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
     * @param  \App\Events\DemoEvent  $event
     * @return void
     */
    public function handle(DemoEvent $event)
    {
        Mail::to($event->data['email'])->send(new DemoMail($event->data));
    }
}
