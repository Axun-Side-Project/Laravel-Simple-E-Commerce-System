<?php

namespace App\Domains\Customer\Listeners;

use App\Domains\Customer\Events\CustomerRegisterEvent;
use Illuminate\Support\Facades\Log;

class SendRegisterNotificationListener
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //...
    }

    /**
     * Handle the event.
     */
    public function handle(CustomerRegisterEvent $event)
    {
        return $event->customer;
    }

}
