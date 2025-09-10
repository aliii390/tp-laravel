<?php

namespace App\Repositories;

use Symfony\Component\HttpFoundation\Request;

interface NoteRepositoryInterface
{
    public function all();
    public function find($id);
    public function store(Request $request, int $recetteId);
    
}