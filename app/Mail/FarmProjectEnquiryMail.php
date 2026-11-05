<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FarmProjectEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $enquiry)
    {
    }

    public function build(): static
    {
        return $this
            ->subject('The Farm Project: New Enquiry - '.$this->enquiry['businessName'])
            ->view('emails.farm-project-enquiry')
            ->with(['enquiry' => $this->enquiry]);
    }
}
