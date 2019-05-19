<?php

namespace App\Events;

use App\Downloads;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

/**
 * Class DownloadFormSubmitted
 * @package App\Events
 */
class DownloadFormSubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Downloads
     */
    public $download;


    /**
     * DownloadFormSubmitted constructor.
     * @param Downloads $download
     */
    public function __construct(Downloads $download)
    {
        $this->download = $download;
    }
}
