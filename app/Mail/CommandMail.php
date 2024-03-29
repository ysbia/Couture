<?php

namespace sayCouture\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class CommandMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order,$product)
    {
        $this->order=$order;
        $this->product=$product;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $picture =collect(json_decode($this->product->pictures))->first();

        return $this->from("sbia.youssef@gmail.com")
                    ->subject('Confirm your Order')
                    ->view('email.customerEmail')
                    ->with([
                        'order' => $this->order,
                        'product' => $this->product,
                        'picture'=> $picture,

                    ]);
    }
}
