<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $firstname; // Ensure this is declared correctly

    /**
     * Create a new message instance.
     */
    public function __construct($otp, $firstname)
    {
        $this->otp = $otp;
        $this->firstname = $firstname; // Corrected to use the right property
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '900 SIGNUP VERIFICATION',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.email_otp', // View directory and blade file
            with: [
                'otp' => $this->otp,
                'firstname' => $this->firstname, // This should now work
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
