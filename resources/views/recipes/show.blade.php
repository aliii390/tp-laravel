<x-layout>

<article class="max-w-md mx-auto">
            <!-- Carte de recette -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
             
                
                <!-- Contenu de la carte -->
                <article class="p-6">
        
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{$recettes->name}}</h2>
                    
                    <!-- Temps et difficulté -->
                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            30 min
                        </span>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Facile</span>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-600 mb-6">{{$recettes->preparationTime}}</p>
                    <p class="text-gray-600 mb-6">{{$recettes->cookingTime}}</p>
                    <p class="text-gray-600 mb-6">{{$recettes->serves}}</p>
                

                     <!-- Liste d'ingrédients -->
                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-800 mb-2">Ingrédients de la recette</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            @foreach($recettes->ingredients as $ingredient)
                                <li>{{ $ingredient->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                
                </article>

                <!-- Bouton générer -->
                <div class="px-6 pb-6">
                    <a href="{{ route('recipes.index') }}" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                     retour
                    </a>
                </div>
            </div>
        </article>


</x-layout>