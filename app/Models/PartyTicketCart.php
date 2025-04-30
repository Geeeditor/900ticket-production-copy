<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PartyTicketCart extends Model
{
    //

    protected $fillable = [
        'event_reference', 'regular_unit',
        'vip_unit',
        'vvip_unit',
    ];

    public function cart(): BelongsTo {
        return $this->belongsTo(Cart::class);
    }
}
