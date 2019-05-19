<?php

namespace App\Listeners;

use App\Events\DownloadFormSubmitted;
use App\Mail\DownloadFont;
use Illuminate\Support\Facades\Mail;

class SendDownloadLink
{
    /**
     * Handle the event.
     *
     * @param  DownloadFormSubmitted  $event
     * @return void
     */
    public function handle(DownloadFormSubmitted $event)
    {
        Mail::send(new DownloadFont($event->download));
    }
}
