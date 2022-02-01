<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieLijst extends Model
{
    use HasFactory;
    protected $table = 'categorie_lijsts';

    protected $fillable =[
        'recept_id',
        'recept_categorie_id'
    ];

    public function recepten(){
        return $this->hasMany(Recept::class);
    }
}
