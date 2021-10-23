<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $values;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($values)
    {
        $this->values = $values;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gurungjeneliya@gmail.com')->subject('New Contact Enquiry')->view('contactemailtemplate')->with('values', $this->values);
    }
}

?>
