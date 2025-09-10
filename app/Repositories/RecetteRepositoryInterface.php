<?php 

namespace App\Repositories;

interface RecetteRepositoryInterface
{
    public function all();
    public function find($id);
    
}