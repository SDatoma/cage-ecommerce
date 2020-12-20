<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'John';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'test@codebriefly.com';
        $name = 'Test Mail';
        $subject = 'Test Mail';
    return $this->view('emails.test-mail')
        ->from($address, $name)
        ->cc($address, $name)
        ->bcc($address, $name)
        ->replyTo($address, $name)
        ->subject($subject)
        ->with([
          'CustomOption' => 'CustomValue',
          'CustomOption' => 'CustomValue'
        ]);
    }
}