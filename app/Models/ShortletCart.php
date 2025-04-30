<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortletCart extends Model
{
    //
    public function cart(): BelongsTo {
        return $this->belongsTo(Cart::class);
    }
}
