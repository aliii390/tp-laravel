<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    //belongto

    use HasFactory;

    protected $fillable = [
        'note',
        'commentaire'
    ];

    public function recettes(): BelongsTo{

        return $this->belongsTo(Recette::class);
    }

}
