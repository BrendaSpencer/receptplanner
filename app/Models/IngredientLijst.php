<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientLijst extends Model
{
    use HasFactory;

    protected $table = 'ingredient_lijsts';

    protected $fillable =[
        'recept_id',
        'ingredient_id',
        'aantal',
        'eenheid'
    ];

    // public function recept(){
    //     return $this->belongsTo(Recept::class);
    // }

    // public function ingredienten(){
    //     return $this->hasMany(Ingredient::class);
    // }
}
