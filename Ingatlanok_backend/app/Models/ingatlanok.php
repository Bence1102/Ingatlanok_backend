<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ingatlanok extends Model
{
    /** @use HasFactory<\Database\Factories\IngatlanokFactory> */
    use HasFactory;
    
    protected $table = 'ingatlanoks';

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

    public function kategoria(): BelongsTo
    {
        return $this->belongsTo(Kategoria::class, 'kategoria_id');
    }
}
