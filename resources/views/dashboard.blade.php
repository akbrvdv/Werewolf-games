<x-app-layout>
    <x-slot name="header">
        {{ __('Game Lobby') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-black/40 backdrop-blur-lg overflow-hidden shadow-2xl sm:rounded-2xl border border-white/10 p-8 text-center mb-8">
                <h1 class="font-['Cinzel'] text-5xl text-white mb-2 drop-shadow-[0_0_10px_rgba(168,85,247,0.5)]">
                    Werewolf
                </h1>
                <p class="text-gray-400 text-lg mb-8 font-light">
                    Desa sedang tidur. Akankah kamu bertahan hidup malam ini?
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-6 mt-6">
                    <button class="group relative px-8 py-4 bg-purple-700 hover:bg-purple-600 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-[0_0_20px_rgba(147,51,234,0.5)]">
                        <div class="absolute inset-0 bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <span class="font-['Cinzel'] text-xl font-bold text-white flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Buat Room Baru
                        </span>
                    </button>

                    <button class="group px-8 py-4 bg-transparent border-2 border-purple-500 text-purple-300 hover:bg-purple-500/20 rounded-xl transition-all duration-300 transform hover:scale-105">
                        <span class="font-['Cinzel'] text-xl font-bold flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Gabung Room
                        </span>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-black/30 backdrop-blur-md p-6 rounded-xl border border-white/5 hover:border-purple-500/50 transition-colors">
                    <h3 class="text-xl font-['Cinzel'] text-gray-200 mb-4 border-b border-gray-700 pb-2">Status Pemain</h3>
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-xl font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-white font-bold">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-400">Level 1 Villager</p>
                        </div>
                    </div>
                </div>

                <div class="bg-black/30 backdrop-blur-md p-6 rounded-xl border border-white/5 hover:border-purple-500/50 transition-colors">
                    <h3 class="text-xl font-['Cinzel'] text-gray-200 mb-4 border-b border-gray-700 pb-2">Berita Desa</h3>
                    <p class="text-gray-400 text-sm">
                        Belum ada permainan yang berlangsung. Buat room baru dan ajak temanmu bermain!
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>