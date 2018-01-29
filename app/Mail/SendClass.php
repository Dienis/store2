<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $product_id;
    protected $product_name;
    protected $product_prise;
    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product_id, $product_name, $product_prise, $phone)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_prise = $product_prise;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send_mail')
                    ->with([
                        'product_id' => $this->product_id,
                        'product_name' => $this->product_name,
                        'product_prise' => $this->product_prise,
                        'phone' => $this->phone,
                    ])
                    ->subject('subject', 'Новое письмо');
    }
}
