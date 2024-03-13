<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Content;

class Welcome1 extends Mailable
{
    use Queueable, SerializesModels;

    private $userData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = Content::where('title', 'MAIL2')
            ->orderBy('order_num')
            ->get();
        if(count($content) >= 1) {
            $content[0]->content = $content[0]->content.' '.$this->userData['first_name'].' '.$this->userData['last_name'];
            $content[5]->content .= ' '.$this->userData['username'];
            $content[6]->content .= ' '.$this->userData['password'];
        }
        return $this->subject('Welcome to OIS')
            ->markdown('emails.welcome1')
            ->with('userData', $this->userData)
            ->with('content', $content);
    }
}
