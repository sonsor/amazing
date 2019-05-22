<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactAdminEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

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
        //$this->to($this->contact->email, $this->contact->firstName);
        $this->subject('Contact Us Message');
        return $this->view('emails.contact.admin');
    }
}
