<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Chatmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($chat)
    {
        $this->chatnotif = $chat;
        
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this
        ->from('davaoojt_4@agentsofvalue.com')
        ->subject('Student Registration Notif')
        ->view('mail.mails',['mail_data'=>$this->chatnotif]); 

    }
}
