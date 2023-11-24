<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvitation extends Mailable
{
    use Queueable, SerializesModels;

    protected $invitationLink;
    protected $senderName;

    /**
     * Create a new message instance.
     */
    public function __construct($invitationLink, $senderName)
    {
        $this->invitationLink = $invitationLink;
        $this->senderName = $senderName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Invitation from ' . $this->senderName)
                    ->markdown('mail.invitation')
                    ->with([
                        'invitationLink' => $this->invitationLink,
                        'senderName' => $this->senderName,
                    ]);
    }
}
