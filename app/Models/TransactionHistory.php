<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionHistory extends Model
{
    //
    // protected $fillable = [
    //     'receipt',
    //     'mode_of_payment',
    //     'product_name',
    //     'product_price',
    //     'product_quantity',
    //     'product_total_quantity',
    //     'product_total_cost',
    //     'category',
    //     'product_order_date',
    //     'ticket_pass_code',
    //     'status'
    // ];

    public function partyTicketTransaction(): HasMany
    {
        return $this->hasMany(PartyTicketTransaction::class);
    }
    
}
