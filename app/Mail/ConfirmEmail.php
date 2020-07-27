<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;
      public $fname;
      public $hash;
      public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fname, $hash, $email)
    {
    $this->fname = $fname;
    $this->hash = $hash;
    $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('slavicvitec@gmail.com')->subject('Подтвердите адрес электронной почты')->view('auth.confmail');
    }
}
