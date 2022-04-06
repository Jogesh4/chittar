<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order,$shipping,$billing)
    {
        $this->order = $order;
        $this->shipping = $shipping;
        $this->billing = $billing;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order_mail',array('order'=> $this->order,'shipping'=> $this->shipping,'billing'=> $this->billing));
    }
}
