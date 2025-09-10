<?php

use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::view('/projects', 'projects')->name('projects');


Route::view('recipes/index', 'recipes.index')->name('index');


Route::get('recipes', [RecetteController::class, 'index'])->name('recipes.index');
Route::get('recipes/{id}', [RecetteController::class, 'show'])->name('recipes.show');

// Route::get('/recipes', function(){
//      $recipes = [
//         1 => ['title' => 'Spaghetti Carbonara', 'ingredients' => ['Pâtes', 'Oeufs', 'Fromage', 'Lardons']],
//         2 => ['title' => 'Poulet Curry', 'ingredients' => ['Poulet', 'Lait de coco', 'Curry']],
//         3 => ['title' => 'Sauté de légumes', 'ingredients' => ['Brocoli', 'Carottes', 'Sauce soja', 'Ail']]
//     ];

//     return view('recipes.index');

// })->name('recipes.index');

