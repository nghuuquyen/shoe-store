<?php

namespace App\Events;

use App\Models\Contact;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Queue\SerializesModels;

class ContactCreated
{
    use InteractsWithSockets, SerializesModels;

    public Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function broadcastOn()
    {
        return new Channel('qt-shops');
    }

    public function broadcastAs()
    {
        return 'ContactCreated';
    }
}
