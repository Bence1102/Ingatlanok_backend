<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingatlanok extends Model
{
    /** @use HasFactory<\Database\Factories\IngatlanokFactory> */
    use HasFactory;
    protected $fillable=[
        'kategoria_id',
        'leiras',
        'datum',
        'tehermentes',
        'ar',
        'kepUrl',
        'create_at',
        'update_at',
    ];
}
