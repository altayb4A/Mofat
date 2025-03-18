<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ShippingEstimate;

class TrackingNumberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $trackingNumber;
    public $booking;

    public function __construct($trackingNumber, $booking)
    {
        $this->trackingNumber = $trackingNumber;
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Your Van Moving Tracking Number')
                    ->view('emails.tracking_number')
                    ->with([
                        'trackingNumber' => $this->trackingNumber,
                        'booking' => $this->booking,
                    ]);
    }
}

