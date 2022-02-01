<?php

namespace App\Http\Controllers;

use App\Models\CategorieLijst;
use App\Models\Ingredient;
use App\Models\IngredientLijst;
use App\Models\Recept;
use App\Models\ReceptCategorie;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index(){
        return view('recept.receptToevoegen', [
            'categories' => ReceptCategorie::all(),
            'ingredienten' => Ingredient::all()
        ]);
    }

    public function show(Recept $recept){
       
        return view('recept.recept',[
            'recept' => $recept
        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'naam' => 'required|max:255',
            'beschrijving' => 'required|max:255',
            'recept' => 'required|max:255',
            'duurtijd' => 'required',
            'moeilijkheid' => 'required'
        ]);

       $recept = Recept::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'recept' => $request->recept,
            'duurtijd' => $request->duurtijd,
            'moeilijkheid' => $request->moeilijkheid,
            'user_id' =>$request->user()->id
        ]);

        $receptId = $recept->id;

        

         foreach($request->ingredient as $ingredientLijn){
           
            IngredientLijst::create([
                'ingredient_id' => $ingredientLijn[0],
                'aantal' => $ingredientLijn[1],
                'eenheid' => $ingredientLijn[2],
                'recept_id' => $receptId
            ]);
        }
        foreach($request->categorien as $categorieLijst){
       
        CategorieLijst::create([
            'recept_id' => $receptId,
            'recept_categorie_id' => $categorieLijst
       ]);
    }
        
   
          return redirect('/home');
    
}
}