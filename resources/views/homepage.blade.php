
<x-layout>
    <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto">
            <!-- Carte de recette -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Image de la recette -->
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="Recette" class="w-full h-full object-cover">
                </div>
                
                <!-- Contenu de la carte -->
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Salade Mediterranean</h2>
                    
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
                    <p class="text-gray-600 mb-6">Une délicieuse salade fraîche avec des tomates, concombres, olives, feta et une vinaigrette à l'huile d'olive.</p>

                    <!-- Liste d'ingrédients -->
                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-800 mb-2">Ingrédients</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            <li>Tomates cerises</li>
                            <li>Concombre</li>
                            <li>Olives noires</li>
                            <li>Feta</li>
                            <li>Huile d'olive</li>
                        </ul>
                    </div>
                </div>

                <!-- Bouton générer -->
                <div class="px-6 pb-6">
                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                        Générer une recette aléatoire
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>

