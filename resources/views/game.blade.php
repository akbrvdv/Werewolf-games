<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span>Room: XJ92A</span>
            <span class="text-purple-400 font-bold animate-pulse">Fase: MALAM (00:30)</span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="relative min-h-[600px] flex flex-col items-center justify-center">
                
                <div class="absolute z-10 text-center space-y-4">
                    <div class="bg-black/60 backdrop-blur-md p-6 rounded-2xl border border-purple-500/30 shadow-[0_0_30px_rgba(168,85,247,0.3)]">
                        <h2 class="font-['Cinzel'] text-3xl text-white mb-2">Malam Telah Tiba</h2>
                        <p class="text-gray-300">Werewolf sedang memilih mangsa...</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 w-full px-4">
                    
                    <div class="relative group flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full border-4 border-purple-500 shadow-[0_0_20px_rgba(168,85,247,0.6)] overflow-hidden bg-gray-800 transition-transform group-hover:scale-110 cursor-pointer">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Akbar" alt="Avatar" class="w-full h-full bg-slate-700">
                        </div>
                        <div class="mt-3 text-center">
                            <span class="bg-purple-900/80 px-3 py-1 rounded-full text-sm font-bold text-white border border-purple-400/50">
                                Anda (Akbar)
                            </span>
                        </div>
                    </div>

                    <div class="relative group flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full border-4 border-green-500 shadow-[0_0_15px_rgba(34,197,94,0.4)] overflow-hidden bg-gray-800 transition-transform group-hover:scale-110 cursor-pointer">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Riyan" alt="Avatar" class="w-full h-full bg-slate-700">
                        </div>
                        <div class="mt-3 text-center">
                            <span class="bg-black/60 px-3 py-1 rounded-full text-sm font-bold text-white border border-white/10">
                                Riyan
                            </span>
                        </div>
                    </div>

                    <div class="relative group flex flex-col items-center grayscale opacity-50">
                        <div class="w-24 h-24 rounded-full border-4 border-gray-600 bg-gray-800 overflow-hidden relative">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Dava" alt="Avatar" class="w-full h-full bg-slate-700">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/60">
                                <span class="text-red-600 text-6xl font-['Cinzel'] font-bold drop-shadow-md">X</span>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <span class="bg-black/60 px-3 py-1 rounded-full text-sm font-bold text-gray-400 border border-white/10 decoration-line-through">
                                Dava
                            </span>
                        </div>
                    </div>

                    @foreach(range(1, 5) as $i)
                    <div class="relative group flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full border-4 border-gray-500 hover:border-yellow-400 overflow-hidden bg-gray-800 transition-transform group-hover:scale-110 cursor-pointer">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $i }}" alt="Avatar" class="w-full h-full bg-slate-700">
                        </div>
                        <div class="mt-3 text-center">
                            <span class="bg-black/60 px-3 py-1 rounded-full text-sm font-bold text-white border border-white/10">
                                Player {{ $i }}
                            </span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="fixed bottom-8 left-0 right-0 flex justify-center px-4">
                <div class="bg-black/80 backdrop-blur-xl border border-white/10 px-8 py-4 rounded-2xl flex gap-4 shadow-2xl">
                    <button class="bg-red-900/80 hover:bg-red-700 text-red-100 px-6 py-2 rounded-lg font-bold border border-red-500/50 transition-all">
                        Vote Kick
                    </button>
                    <button class="bg-slate-700 hover:bg-slate-600 text-white px-6 py-2 rounded-lg font-bold transition-all">
                        Skip Vote
                    </button>
                    <button class="bg-purple-900/50 hover:bg-purple-800 text-purple-200 px-4 py-2 rounded-lg border border-purple-500/30">
                        💬 Chat (5)
                    </button>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>