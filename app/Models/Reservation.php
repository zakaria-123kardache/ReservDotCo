<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'startdate',
        'enddate',
        'status',
    ];

    public function User ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Sall()
    {
        return $this->hasOne(Sall::class);
    }
}

