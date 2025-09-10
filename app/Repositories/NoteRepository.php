<?php



namespace App\Repositories;

use App\Models\Recette;
use Symfony\Component\HttpFoundation\Request;

class NoteRepository implements NoteRepositoryInterface
{
    public function all()
    {
        return Recette::all();
    }

    public function find($id)
    {
        return Recette::findOrFail($id);
    }
    public function store(Request $request, int $recetteId)
    {
        
    }

   
}
