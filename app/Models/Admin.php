<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add any other fields as needed
    ];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

}
