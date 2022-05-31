<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail_message;
    protected $userMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_message, $userMail)
    {
        $this->mail_message = $mail_message;
        $this->userMail = $userMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->userMail)
        ->view('admin.contacts.body', ["userMail" => $this->userMail, "mail_message" => $this->mail_message]);
    }
}
