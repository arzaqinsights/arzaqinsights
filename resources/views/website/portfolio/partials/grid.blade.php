@php
$projects = [
    ['title' => 'Nova Vault App', 'category' => 'Fintech', 'tags' => ['UI/UX', 'App Dev'], 'img' => '/images/services.jpg'],
    ['title' => 'Aura Analytics', 'category' => 'SaaS Dashboard', 'tags' => ['Web App', 'React.js'], 'img' => '/images/hero.jpg'],
    ['title' => 'Nexus Retail Commerce', 'category' => 'E-Commerce', 'tags' => ['Shopify', 'Design'], 'img' => '/images/about-office.jpg'],
    ['title' => 'Echo AI Interface', 'category' => 'AI Automation', 'tags' => ['UX Design', 'Python'], 'img' => '/images/hero.jpg'],
    ['title' => 'Verve Social Platform', 'category' => 'Social Media', 'tags' => ['Laravel', 'Vue.js'], 'img' => '/images/services.jpg'],
    ['title' => 'Altitude Health App', 'category' => 'Healthcare', 'tags' => ['Mobile App', 'Native'], 'img' => '/images/about-office.jpg'],
];
@endphp
<section class="pb-32 bg-brand-white text-brand-black" data-theme="light">
    <div class="container mx-auto px-6">
        
        <!-- Filter Bar -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-16">
            <button class="px-6 py-2.5 rounded-full border border-brand-black text-brand-black font-semibold text-sm transition-colors bg-brand-black/5 hover:bg-brand-black/10">All Projects</button>
            <button class="px-6 py-2.5 rounded-full border border-brand-black/20 text-brand-black/70 font-semibold text-sm hover:border-brand-black hover:text-brand-black transition-colors">Web Design</button>
            <button class="px-6 py-2.5 rounded-full border border-brand-black/20 text-brand-black/70 font-semibold text-sm hover:border-brand-black hover:text-brand-black transition-colors">App Dev</button>
            <button class="px-6 py-2.5 rounded-full border border-brand-black/20 text-brand-black/70 font-semibold text-sm hover:border-brand-black hover:text-brand-black transition-colors">AI Automation</button>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            @foreach($projects as $index => $project)
            <a href="#" class="group block relative overflow-hidden rounded-3xl aspect-[4/3] bg-brand-gray/10 {{ $index % 2 !== 0 ? 'md:mt-24' : '' }}">
                <!-- Image -->
                <img src="{{ asset($project['img']) }}" alt="{{ $project['title'] }}" class="absolute inset-0 w-full h-full object-cover transition duration-1000 group-hover:scale-105 opacity-90 group-hover:opacity-100 mix-blend-multiply group-hover:mix-blend-normal">
                
                <!-- Dark Overlay -->
                <div class="absolute inset-0 bg-linear-to-t from-black via-black/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 p-8 md:p-12 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white/70 mb-3 font-medium tracking-widest uppercase text-sm">{{ $project['category'] }}</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight max-w-sm">{{ $project['title'] }}</h3>
                    <div class="flex flex-wrap gap-3 text-sm">
                        @foreach($project['tags'] as $tag)
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-5 py-2 rounded-full border border-white/10 font-medium hover:border-white/30 transition-colors">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-24 flex justify-center">
            <button class="px-10 py-4 border-2 border-brand-black text-brand-black rounded-full hover:bg-brand-black hover:text-brand-white transition-all duration-300 font-bold text-lg inline-flex items-center gap-3 group">
                Load More Work
                <i class="fa-solid fa-rotate-right transform group-hover:rotate-180 transition-transform duration-500"></i>
            </button>
        </div>

    </div>
</section>
