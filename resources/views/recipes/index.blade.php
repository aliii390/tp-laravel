
<x-layout>

        <section class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <article class="max-w-md mx-auto">
           
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
              
                
               
                <article class="p-6">
                    @foreach ($recettes as $recette)
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{$recette->name}}</h2>
                    
               
                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            30 min
                        </span>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Facile</span>
                    </div>

                    <p class="text-gray-600 mb-6">{{$recette->preparationTime}}</p>
                    <p class="text-gray-600 mb-6">{{$recette->cookingTime}}</p>
                    <p class="text-gray-600 mb-6">{{$recette->serves}}</p>
                

                    
                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-800 mb-2">Ingrédients de la recette</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            @foreach($recette->ingredients as $ingredient)
                                <li>{{ $ingredient->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                     <div class="px-6 pb-6">
                    <a href="{{route('recipes.show', ['id' => $recette->id])}}" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                      voir la recette
                    </a>
                </div>
                      @endforeach
                </article>

                <!-- Bouton générer -->
               
            </div>
        </article>
    </section>

  

</x-layout>  