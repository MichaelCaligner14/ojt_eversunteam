<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($verify)
    {
        $this->emailVerify = $verify; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('davaoojt_1@agentsofvalue.com')
        ->subject('Clinic Management System')
        ->view('emails.verifyEmail',['mail_data'=>$this->emailVerify]); 
    }
}
