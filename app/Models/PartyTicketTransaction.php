<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PartyTicketTransaction extends Model
{
    //
      //

    protected $casts = [
        'product_price' => 'array',
        'product_quantity' => 'array',
    ];


    protected $fillable = [
        'receipt',
        'mode_of_payment',
        'product_name',
        'product_price',
        'product_quantity',
        'product_total_quantity',
        'product_total_cost',
        'category',
        'product_order_date',
        'ticket_pass_code',
        'status',
        'event_date',
        'taxed_fee',
        'event_time',
        'event_location',
    ];

    public function transactionHistory(): BelongsTo
    {
        return $this->belongsTo(TransactionHistory::class, 'transaction_histories_id');
    }
}
