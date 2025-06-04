<div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 mb-8 grid grid-cols-1 md:grid-cols-[200px_1fr_200px] gap-8 items-center">
    <div class="w-44 h-44 bg-gradient-to-br from-red-400 to-teal-400 rounded-full flex items-center justify-center text-6xl shadow-lg transform transition-transform duration-300 hover:scale-105 mx-auto md:mx-0">⚾</div>
    <div class="text-center md:text-left">
        <h1 class="text-4xl font-bold mb-3 bg-gradient-to-r from-white to-gray-100 text-transparent bg-clip-text">{{ $player->name }}</h1>
        <div class="text-xl text-teal-400 mb-1">
            <span class="divide-x divide-teal-400 flex items-center">
                @foreach ($player->positions as $position)
                    <span class="px-2">{{ $position }}</span>
                @endforeach
            </span>
        </div>
        <div class="text-lg opacity-80">{{ $player->team }}</div>
    </div>
    <div class="text-6xl font-bold bg-gradient-to-r from-red-400 to-amber-400 text-transparent bg-clip-text text-center">#{{ $player->number }}</div>
</div>
