@extends('layouts.app')

@section('content')
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
        'image' => '/images/about-office.jpg',
        'excerpt' => 'Speed is no longer just a luxury. Learn why milliseconds matter when it comes to search rankings.',
        'url' => route('blogs.show')
    ],
    [
        'title' => 'Building Scalable SaaS Platforms in Laravel',
        'category' => 'Development',
        'date' => 'Sep 30, 2026',
        'image' => '/images/hero.jpg',
        'excerpt' => 'An inside look at our architecture choices when building large-scale, high-concurrency SaaS applications.',
        'url' => route('blogs.show')
    ],
    [
        'title' => 'The Role of Micro-Interactions in UX',
        'category' => 'UI/UX',
        'date' => 'Sep 14, 2026',
        'image' => '/images/services.jpg',
        'excerpt' => 'Discover how tiny animations and subtle feedback loops drastically improve user retention and satisfaction.',
        'url' => route('blogs.show')
    ],
    [
        'title' => 'Navigating the New Era of Social Media Marketing',
        'category' => 'Marketing',
        'date' => 'Sep 02, 2026',
        'image' => '/images/about-office.jpg',
        'excerpt' => 'Strategies for standing out in an increasingly crowded and algorithmic-driven social media landscape.',
        'url' => route('blogs.show')
    ]
];
@endphp

<div class="pt-32 pb-20 lg:pt-40 lg:pb-32 bg-brand-white min-h-screen">
    <div class="container mx-auto px-6 mb-20 max-w-4xl text-center">
        <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Our Blog</span>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-brand-black mb-6">
            Insights & <span class="text-brand-black/40">News.</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-black/70 leading-relaxed">
            Expert perspectives on design, development, marketing, and everything digital.
        </p>
    </div>

    <div class="container mx-auto px-6">
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
                    <h3 class="text-2xl font-bold text-white mb-4 leading-tight shadow-black drop-shadow-md">{{ $blog['title'] }}</h3>
                    <div class="flex gap-3 text-sm">
                        <span class="bg-white/10 text-brand-white backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10">{{ $blog['category'] }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
        <div class="mt-20 flex justify-center">
            <button class="px-8 py-4 border border-brand-black/20 text-brand-black rounded-full hover:bg-brand-black hover:text-brand-white transition-all duration-300 font-semibold">
                Load More Articles
            </button>
        </div>
    </div>
</div>
@endsection
