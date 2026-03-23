<section data-theme="light" class="mt-2 py-20 lg:py-32 relative text-brand-balck">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
            <div class="max-w-2xl">
                <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Selected Works</span>
                <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight">
                    Proof <span class="text-brand-black/40">of Excellence.</span>
                </h2>
            </div>
            <a href="/portfolio" class="px-8 py-4 border rounded-full hover:bg-brand-black hover:text-brand-white transition-all duration-300 w-fit whitespace-nowrap">
                View All Projects
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-8" data-theme="dark">
            <!-- Project 1 -->
            <a href="/portfolio" class="group block relative overflow-hidden rounded-3xl aspect-4/3">
                <img src="{{ asset('images/services.jpg') }}" alt="Project 1" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-linear-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white/60 mb-2 font-medium">Fintech & Banking</p>
                    <h3 class="text-3xl font-bold text-white mb-4">Nova Vault App</h3>
                    <div class="flex gap-3 text-sm">
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">UI/UX</span>
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">App Dev</span>
                    </div>
                </div>
            </a>

            <!-- Project 2 -->
            <a href="/portfolio" class="group block relative overflow-hidden rounded-3xl aspect-4/3 md:mt-24">
                <img src="{{ asset('images/hero.jpg') }}" alt="Project 2" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-linear-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white/60 mb-2 font-medium">SaaS Dashboard</p>
                    <h3 class="text-3xl font-bold text-white mb-4">Aura Analytics</h3>
                    <div class="flex gap-3 text-sm">
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">Web App</span>
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">React.js</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
