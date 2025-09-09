<?php

namespace App\Http\Controllers;

use App\Models\Recette;

abstract class Controller
{
    
    public function index(){
        $recette = Recette::all();
       
    }



     



}


