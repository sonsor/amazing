<?php

namespace App\Events;

use App\Contact;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

/**
 * Class ContactCreated
 * @package App\Events
 */
class ContactCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Contact
     */
    public $contact;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
}
