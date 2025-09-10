<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use App\Repositories\RecetteRepositoryInterface;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    private $recettes;

    public function __construct(RecetteRepositoryInterface $recettes)
    {
        $this->recettes = $recettes;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
        $recette = Recette::with('ingredients')->inRandomOrder()->take(1)->get();

        return view('recipes/index', [
            'recettes' => $recette
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recette = Recette::with('ingredients')->findOrFail($id);
        return view('recipes/show', [
            'recettes' => $recette
        ]);
    }
}
