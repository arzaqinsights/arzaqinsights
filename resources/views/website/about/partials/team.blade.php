@php
$team = [
    ['name' => 'Michael Reaves', 'role' => 'Chief Executive Officer', 'img' => '/images/hero.jpg'],
    ['name' => 'Sarah Jenkins', 'role' => 'Chief Design Officer', 'img' => '/images/services.jpg'],
    ['name' => 'David Chen', 'role' => 'Lead Engineer', 'img' => '/images/about-office.jpg'],
    ['name' => 'Elena Rossi', 'role' => 'Head of AI Integration', 'img' => '/images/hero.jpg'],
];
@endphp
<section class="py-24 bg-brand-gray/5 text-brand-black" data-theme="light">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-3xl">
                <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Our People</span>
                <h2 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
                    The Elite <span class="text-brand-black/40">Collective.</span>
                </h2>
                <p class="text-brand-black/70 mt-6 text-lg md:text-xl leading-relaxed max-w-2xl">
                    Meet the brilliant minds behind the code and canvases. Our leadership drives innovation at every touchpoint.
                </p>
            </div>
            <a href="/contact" class="px-8 py-4 border border-brand-black/20 text-brand-black rounded-full hover:bg-brand-black hover:text-brand-white transition-all duration-300 font-semibold whitespace-nowrap">
                Join Our Team
            </a>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($team as $member)
            <div class="group relative">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-brand-gray/10 border border-brand-black/5 mb-6 relative">
                    <img src="{{ asset($member['img']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105 group-hover:opacity-90 opacity-100 mix-blend-luminosity grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-40"></div>
                </div>
                <h3 class="text-xl font-bold text-brand-black">{{ $member['name'] }}</h3>
                <p class="text-sm text-brand-black/60 font-semibold uppercase tracking-wider mt-1">{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>
