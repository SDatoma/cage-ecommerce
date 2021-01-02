<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        return $this->from('cagebatiment@gmail.com')
        ->markdown('emails.envoi_mail', [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'titre_mail' => $this->titre_mail,
            'contenu_mail' => $this->contenu_mail,
        ]);
    }
}