<?php

namespace App\Mail;

use App\Downloads;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DownloadFont extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $download;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Downloads $download)
    {
        $this->download = $download;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->download->email, $this->download->name);
        $this->subject('Amazing Neo Download Link');
        return $this->view('emails.download');
    }
}
