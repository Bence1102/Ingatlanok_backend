<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'kategoria_nev',
        'created_at',
        'updated_at',
    ];
}
