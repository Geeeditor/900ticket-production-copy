<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shortlet extends Model
{
    //

    protected $cast = [
        'images' => 'array'
    ];

    protected $fillable = [
        'apartment_title',
        'address',
        'description',
        'bedrooms',
        'bathrooms',
        'max_guest',
        'apartment_type',
        'checking_option',
        'apartment_price',
        'images',
        'apartment_availability',
    ];





    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
