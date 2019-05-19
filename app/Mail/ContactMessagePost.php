<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessagePost extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * ContactMessagePost constructor.
     * @param ContactInterface $contacct
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to(\Option::get('admin.email'), 'Admin User');
        $this->from($this->contact->email, $this->contact->firstName);
        $this->subject('Contact Us Message');
        return $this->view('emails.contact');
    }
}
