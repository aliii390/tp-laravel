<?php



namespace App\Repositories;

use App\Models\Recette;


class RecetteRepository implements RecetteRepositoryInterface
{
    public function all()
    {
        return Recette::all();
    }

    public function find($id)
    {
        return Recette::findOrFail($id);
    }

   
}
