<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'time',
        'location',
        'description',
        'hero_image',
        'map_link',
        'regular_ticket_price',
        'vip_ticket_price',
        'vvip_ticket_price',
        'event_reference',
        // 'category',
        'ticket_passcode'
        // Add any other fields as needed
    ];

    // Define the relationship with the Admin model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
