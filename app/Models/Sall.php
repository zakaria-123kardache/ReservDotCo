<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'photo',
        'user_id',
    ];

    public function Reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    
}
