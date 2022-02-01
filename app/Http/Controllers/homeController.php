<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $recepten = Recept::get();
        return view('home',[
            'recepten' =>$recepten
        ]);
    }
}
