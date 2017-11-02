<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    private $email_to;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_to)
    {
        $this->email_to = $email_to;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.welcome')->to($this->email_to)->subject('Welcome to ambrose.pro');
    }
}
