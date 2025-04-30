<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cart extends Model
{
    //
    protected $fillable = [
        'event_reference', 'regular_unit',
        'vip_unit',
        'vvip_unit',
    ];
    //     Each Cart can have multiple types of items (subtables).
    // use HasFactory;
    public function hotelBookingCart(): HasMany {
        return $this->hasMany(HotelBookingCart::class);
    }

    public function partyTicketCart(): HasMany {
        return $this->hasMany(PartyTicketCart::class);
    }

    public function shortletCart(): HasMany {
        return $this->hasMany(ShortletCart::class);
    }

    public function flightBookingCart(): HasMany {
        return $this->hasMany(FlightBookingCart::class);
    }



}
