<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $first_name, $last_name, $titre_mail, $contenu_mail;
    public function __construct($first_name, $last_name, $titre_mail, $contenu_mail)
    {
        //
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->titre_mail = $titre_mail;
        $this->contenu_mail = $contenu_mail;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cage-batiment@gmail.com')
        ->markdown('emails.email_facture', [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'titre_mail' => $this->titre_mail,
            'contenu_mail' => $this->contenu_mail,
        ]);
    }
}
