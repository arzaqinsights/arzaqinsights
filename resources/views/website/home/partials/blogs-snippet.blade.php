@php
$blogs = [
    [
        'title' => 'The Future of AI in Digital Agencies',
        'category' => 'AI Automation',
        'date' => 'Oct 15, 2026',
        'image' => '/images/hero.jpg',
        'excerpt' => 'How artificial intelligence is reshaping the way digital agencies build, scale, and automate client solutions.',
        'url' => route('blogs.show')
    ],
    [
        'title' => 'Mastering Glassmorphism in Modern Web Design',
        'category' => 'Web Design',
        'date' => 'Oct 12, 2026',
        'image' => '/images/services.jpg',
        'excerpt' => 'A comprehensive guide to leveraging modern CSS features to create high-end, futuristic interfaces.',
        'url' => route('blogs.show')
    ],
    [
        'title' => 'Why Performance Optimization is the New SEO',
        'category' => 'Development',
        'date' => 'Oct 08, 2026',
        'image' => '/images/services.jpg',
        'excerpt' => 'Speed is no longer just a luxury. Learn why milliseconds matter when it comes to search rankings.',
        'url' => route('blogs.show')
    ]
];
@endphp

<section data-theme="light" class="mt-2 py-20 lg:py-32 relative text-brand-black">
    <div class="container">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
            <div class="max-w-2xl">
                <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Our Insights</span>
                <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight">
                    Latest <span class="text-brand-black/40">Thinking.</span>
                </h2>
            </div>
            <a href="{{ route('blogs.index') }}" class="px-8 py-4 border rounded-full hover:bg-brand-black hover:text-brand-white transition-all duration-300 w-fit whitespace-nowrap">
                View All Articles
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
            <a href="{{ $blog['url'] }}" class="group block relative overflow-hidden rounded-3xl aspect-[4/5] md:aspect-[3/4] bg-brand-gray/10">
                <!-- Image -->
                <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                
                <!-- Dark Overlay for text legibility -->
                <div class="absolute inset-0 bg-linear-to-t from-black via-black/20 to-transparent"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-white/70 mb-2 font-medium">{{ $blog['date'] }}</p>
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 leading-tight">{{ $blog['title'] }}</h3>
                    <div class="flex gap-3 text-sm">
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">{{ $blog['category'] }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
