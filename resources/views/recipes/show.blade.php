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

          <!-- Formulaire de commentaire et note -->
    <section class="max-w-4xl mx-auto px-4 py-8">
        <article class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Donnez votre avis</h2>
            
            <form class="space-y-6" method="POST" >
               @csrf 

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Note</label>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="note" value="1" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-2 text-sm text-gray-600">1</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="note" value="2" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-2 text-sm text-gray-600">2</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="note" value="3" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-2 text-sm text-gray-600">3</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="note" value="4" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-2 text-sm text-gray-600">4</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="note" value="5" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label class="ml-2 text-sm text-gray-600">5</label>
                        </div>
                    </div>
                </div>

                <!-- Section Commentaire -->
                <div class="space-y-2">
                   
                    <label for="commentaire" class="block text-sm font-medium text-gray-700">Votre commentaire</label>
                    <input 
                        id="commentaire" 
                        name="commentaire" 
                        rows="4" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Partagez votre expérience avec cette recette..."
                    />
                </div>

                <!-- Bouton Submit -->
                <div class="flex justify-end">
                    <button 
                        type="submit"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out"
                    >
                        Envoyer mon avis
                    </button>
                </div>
            </form>
        </article>
    </section>

</x-layout>