<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendingEmail extends Mailable
{
    use Queueable, SerializesModels;

/**
* Create a new message instance.
*
* @return void
*/

    public $emails;

    public $subject;
    

    public function __construct($emails)
    {
        $this->emails = $emails;
        $this->subject = $emails['subject']   ;
    }

/**
* Build the message.s
*
* @return $this
*/
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('email_template')
                    ->with('emails', $this->emails);
}
}