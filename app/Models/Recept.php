<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ingredient;
use App\Models\ReceptCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recept extends Model
{
    use HasFactory;
    protected $table = 'recepts';
    protected $fillable = [
        'naam',
        'beschrijving',
        'recept',
        'duurtijd',
        'moeilijkheid',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function receptCategorien(){
        return $this->belongsToMany(ReceptCategorie::class, 'categorie_lijst','recept_id','categorie_id');
    }

    public function ingredienten(){
        return $this->belongsToMany(Ingredient::class, 'ingredient_lijsts','recept_id', 'ingredient_id')->withPivot('aantal', 'eenheid');
    }
}
