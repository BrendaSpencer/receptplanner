<?php

namespace App\Models;

use App\Models\Recept;
use App\Models\WinkelCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingredient extends Model
{
    use HasFactory;
    protected $table = 'ingredients';


    protected $fillable = [
        'naam',
        'winkellijst',
        'winkel_categorie_id'
    ];

    public function winkelcategorie(){
        return $this->belongsTo(WinkelCategorie::class);
    }

    public function recepten(){
        return $this->belongsToMany(Recept::class, 'ingredient_lijsts','recept_id', 'ingredient_id');
    }
}
