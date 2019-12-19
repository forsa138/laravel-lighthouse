<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'contacto@roier.ai';
        $cc = 'francisco@roier.ai';
        $subject = 'Resultado de medición';
        $name = 'Contacto';

        return $this->view('mail.emailTest')
            ->from($address, $name)
            ->cc($cc)
            ->subject($subject)
            ->with([ 'test_message' => $this->msg['message'] ]
            );


    }
}
