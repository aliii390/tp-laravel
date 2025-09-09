<?php

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command("parseRecette {recetteFile}", function (string $recetteFile) {
    $this->info("Lecture du fichier $recetteFile...");
    
    try {
        // Vérifier si le fichier existe
        if (!Storage::exists($recetteFile)) {
            $this->error("Erreur : Le fichier n'existe pas.");
            $this->info("Fichiers disponibles dans private/ :");
            foreach (Storage::files('private') as $file) {
                $this->line("- $file");
            }
            return;
        }

        // Lire le contenu du fichier
        $file = Storage::get($recetteFile);
        
        // Vérifier si le contenu est vide
        if (empty($file)) {
            $this->error("Erreur : Le fichier est vide.");
            return;
        }

        // Décoder le JSON
        $data = json_decode($file, true);
        
        // Vérifier les erreurs JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->error("Erreur JSON : " . json_last_error_msg());
            return;
        }

        if (!$data) {
            $this->error("Erreur : Le fichier JSON est invalide.");
            return;
        }
    } catch (\Exception $e) {
        $this->error("Erreur : " . $e->getMessage());
        return;
    }

    if (isset($data['recipes'])) {
        $recipes = $data['recipes'];
        $count = 0;
        $this->info("Début de l'importation de " . count($recipes) . " recettes...");

        foreach ($recipes as $recipeData) {
            // Créer la recette
            $recette = Recette::create([
                'name' => $recipeData['name'],
                'preparationTime' => $recipeData['preparationTime'] ?? null,
                'cookingTime' => $recipeData['cookingTime'] ?? null,          
                'serves' => $recipeData['serves'] ?? null,          
            ]);

            // Gérer les ingrédients
            if (!empty($recipeData['ingredients'])) {
                foreach ($recipeData['ingredients'] as $nomIngredient) {
                    $ingredient = Ingredient::firstOrCreate(['name' => $nomIngredient]);
                    $recette->ingredients()->attach($ingredient->id);
                }
            }
            $count++;
            $this->line("✓ Recette importée : " . $recipeData['name']);
        }

        $this->info("\n✅ $count recettes et leurs ingrédients ont été insérés avec succès !");
    } else {
        $this->error("Erreur : Le fichier JSON ne contient pas de tableau 'recipes'.");
    }
});
