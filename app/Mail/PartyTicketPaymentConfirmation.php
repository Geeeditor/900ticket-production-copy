<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PartyTicketPaymentConfirmation extends Mailable
{
    use Queueable, SerializesModels;


    protected $receipt;
    protected $email;
    protected $mode_of_payment;
    protected $product_name;
    protected $product_price;
    protected $product_quantity;
    protected $product_total_quantity;
    protected $product_total_cost;
    protected $category;
    protected $product_order_date;
    protected $first_name;
    protected $last_name;
    protected $status;


    /**
     * Create a new message instance.
     */
    public function __construct( $email, $receipt, $mode_of_payment, $product_name, $product_price, $product_quantity, $product_total_quantity, $product_total_cost, $category, $product_order_date, $first_name, $last_name, $status)
    {

        $this->email = $email;
        $this->receipt = $receipt;
        $this->mode_of_payment = $mode_of_payment;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
        $this->product_total_quantity = $product_total_quantity;
        $this->product_total_cost = $product_total_cost;
        $this->category = $category;
        $this->product_order_date = $product_order_date;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->status = $status;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.payment_confirmation.party_ticket',
            with: [
                // 'data' => $this->data,
                'email' => $this->email,
                'receipt' => $this->receipt,
                'mode_of_payment' => $this->mode_of_payment,
                'product_name' => $this->product_name,
                'product_price' => $this->product_price,
                'product_quantity' => $this->product_quantity,
                'product_total_quantity' => $this->product_total_quantity,
                'product_total_cost' => $this->product_total_cost,
                'category' => $this->category,
                'product_order_date' => $this->product_order_date,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'status' => $this->status,
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