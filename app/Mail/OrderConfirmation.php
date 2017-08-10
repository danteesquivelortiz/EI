<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    protected $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($inputs)
    {
        $this->inputs=$inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('glco140521@upemor.edu.mx','Pizza Planeta')->subject('Orden de pedido')->view('emails.OrderConfirmation')->with(['shopping_cart'=>$this->inputs]);
    }
}
