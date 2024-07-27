<?php

namespace App\Domains\Customer\Events;

use App\Domains\Customer\Models\Customer;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CustomerRegisterEvent
{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public Customer $customer,
    ){
        return $customer;
    }
}
