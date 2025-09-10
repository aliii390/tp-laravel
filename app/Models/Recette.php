<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recette extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ingredient_id',
        'name',
        'preparationTime',
        'cookingTime',
        'serves'
    ];


      

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
