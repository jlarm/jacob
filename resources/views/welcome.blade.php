<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jacob Lohr</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gradient-to-br from-blue-900 to-blue-700 text-white min-h-screen">
    <div class="max-w-7xl mx-auto p-5">
        <!-- Header Section -->
        <livewire:header :player="$player" />

        <!-- Bio Section -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <h3 class="text-teal-400 text-xl font-bold mb-5 pb-3 border-b-2 border-teal-400">Player Information</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Age</span>
                    <span class="text-lg">28 years old</span>
                </div>
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Height/Weight</span>
                    <span class="text-lg">6'2" / 185 lbs</span>
                </div>
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Bats/Throws</span>
                    <span class="text-lg">Right/Right</span>
                </div>
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Experience</span>
                    <span class="text-lg">6 MLB seasons</span>
                </div>
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Hometown</span>
                    <span class="text-lg">Miami, FL</span>
                </div>
                <div class="mb-3">
                    <span class="block text-amber-400 font-bold mb-1">Draft</span>
                    <span class="text-lg">2018, 1st Round</span>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 transition-all duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl">
                <h3 class="text-teal-400 text-xl font-bold mb-5 pb-3 border-b-2 border-teal-400">2024 Season Stats</h3>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Batting Average</span>
                    <span class="font-bold text-xl text-amber-400">.312</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Home Runs</span>
                    <span class="font-bold text-xl text-amber-400">28</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">RBIs</span>
                    <span class="font-bold text-xl text-amber-400">95</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">On-Base %</span>
                    <span class="font-bold text-xl text-amber-400">.385</span>
                </div>
                <div class="py-3 flex justify-between items-center">
                    <span class="font-medium opacity-80">Slugging %</span>
                    <span class="font-bold text-xl text-amber-400">.548</span>
                </div>
            </div>

            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 transition-all duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl">
                <h3 class="text-teal-400 text-xl font-bold mb-5 pb-3 border-b-2 border-teal-400">Career Stats</h3>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Games Played</span>
                    <span class="font-bold text-xl text-amber-400">742</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Career Average</span>
                    <span class="font-bold text-xl text-amber-400">.289</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Total Home Runs</span>
                    <span class="font-bold text-xl text-amber-400">124</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">Total RBIs</span>
                    <span class="font-bold text-xl text-amber-400">456</span>
                </div>
                <div class="py-3 border-b border-white/10 flex justify-between items-center">
                    <span class="font-medium opacity-80">All-Star Selections</span>
                    <span class="font-bold text-xl text-amber-400">3</span>
                </div>
                <div class="py-3 flex justify-between items-center">
                    <span class="font-medium opacity-80">Gold Gloves</span>
                    <span class="font-bold text-xl text-amber-400">2</span>
                </div>
            </div>
        </div>

        <!-- Recent Games -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6 mb-8">
            <h3 class="text-teal-400 text-xl font-bold mb-5 pb-3 border-b-2 border-teal-400">Recent Games</h3>
            <div class="bg-black/20 rounded-xl p-5 mb-4 grid grid-cols-[100px_1fr_100px] items-center cursor-pointer transition-all duration-300 hover:scale-102 hover:bg-black/30">
                <div class="font-bold text-teal-400">Jun 2</div>
                <div class="text-center">NYY vs BOS</div>
                <div class="text-right font-bold text-green-400">W 8-5</div>
            </div>
            <div class="bg-black/20 rounded-xl p-5 mb-4 grid grid-cols-[100px_1fr_100px] items-center cursor-pointer transition-all duration-300 hover:scale-102 hover:bg-black/30">
                <div class="font-bold text-teal-400">May 30</div>
                <div class="text-center">NYY @ TB</div>
                <div class="text-right font-bold text-red-400">L 4-7</div>
            </div>
            <div class="bg-black/20 rounded-xl p-5 mb-4 grid grid-cols-[100px_1fr_100px] items-center cursor-pointer transition-all duration-300 hover:scale-102 hover:bg-black/30">
                <div class="font-bold text-teal-400">May 28</div>
                <div class="text-center">NYY @ TB</div>
                <div class="text-right font-bold text-green-400">W 6-3</div>
            </div>
            <div class="bg-black/20 rounded-xl p-5 grid grid-cols-[100px_1fr_100px] items-center cursor-pointer transition-all duration-300 hover:scale-102 hover:bg-black/30">
                <div class="font-bold text-teal-400">May 26</div>
                <div class="text-center">NYY vs LAA</div>
                <div class="text-right font-bold text-green-400">W 9-4</div>
            </div>
        </div>

        <!-- Photo Gallery -->
        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-6">
            <h3 class="text-teal-400 text-xl font-bold mb-5 pb-3 border-b-2 border-teal-400">Photo Gallery</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">🏟️</div>
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">🏃‍♂️</div>
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">🥇</div>
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">📸</div>
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">👥</div>
                <div class="bg-black/20 aspect-square rounded-xl flex items-center justify-center text-4xl cursor-pointer transition-transform duration-300 hover:scale-105">🎯</div>
            </div>
        </div>
    </div>

    <script>
        // Add interactive elements
        document.querySelectorAll('.bg-black\\/20.rounded-xl.p-5').forEach(card => {
            card.addEventListener('click', function() {
                const date = this.querySelector('.font-bold.text-teal-400').textContent;
                const matchup = this.querySelector('.text-center').textContent;
                const result = this.querySelector('.text-right.font-bold').textContent;

                alert(`Game Details:\nDate: ${date}\nMatchup: ${matchup}\nResult: ${result}`);
            });
        });

        // Smooth stats counting animation
        function animateStats() {
            const statValues = document.querySelectorAll('.font-bold.text-xl.text-amber-400');
            statValues.forEach(stat => {
                const finalValue = stat.textContent;
                if (!isNaN(parseFloat(finalValue))) {
                    let currentValue = 0;
                    const increment = parseFloat(finalValue) / 50;
                    const timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= parseFloat(finalValue)) {
                            stat.textContent = finalValue;
                            clearInterval(timer);
                        } else {
                            stat.textContent = currentValue.toFixed(finalValue.includes('.') ? 3 : 0);
                        }
                    }, 20);
                }
            });
        }

        // Trigger animation on page load
        window.addEventListener('load', () => {
            setTimeout(animateStats, 500);
        });
    </script>
    </body>
</html>
