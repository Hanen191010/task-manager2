<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PendingTasksEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $tasks;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Pending Tasks')
                    ->view('emails.pending_tasks');
    }
}
