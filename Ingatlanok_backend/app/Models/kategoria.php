<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $table = 'kategorias';

    public $timestamps = false;

    protected $fillable = [
        'kategoria_nev'
    ];

    public function ingatlanok(): HasMany
    {
        return $this->hasMany(ingatlanok::class, 'kategoria_id');
    }
}
