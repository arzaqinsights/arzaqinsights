@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Selected Works
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed mb-10 max-w-2xl mx-auto">
            A showcase of our most transformative projects. We fuse visionary design with world-class engineering to create compelling digital experiences.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section data-theme="light" class="py-20 bg-white text-black px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-10">
            <!-- Project 1 -->
            <a href="#" class="group block relative">
                <div class="overflow-hidden rounded-3xl aspect-4/3 bg-gray-100 mb-6">
                    <img src="{{ asset('images/portfolio/1.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <p class="text-sm font-semibold text-black/50 tracking-wider uppercase mb-2">Fintech / Web App</p>
                <h3 class="text-2xl font-bold">Nova Vault Platform</h3>
            </a>

            <!-- Project 2 -->
            <a href="#" class="group block relative md:mt-24">
                <div class="overflow-hidden rounded-3xl aspect-4/3 bg-gray-100 mb-6">
                    <img src="{{ asset('images/portfolio/2.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <p class="text-sm font-semibold text-black/50 tracking-wider uppercase mb-2">SaaS / Dashboard</p>
                <h3 class="text-2xl font-bold">Aura Analytics</h3>
            </a>

            <!-- Project 3 -->
            <a href="#" class="group block relative">
                <div class="overflow-hidden rounded-3xl aspect-4/3 bg-gray-100 mb-6">
                    <img src="{{ asset('images/portfolio/3.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <p class="text-sm font-semibold text-black/50 tracking-wider uppercase mb-2">E-Commerce / App</p>
                <h3 class="text-2xl font-bold">Luxe Retail Mobile</h3>
            </a>

            <!-- Project 4 -->
            <a href="#" class="group block relative md:mt-24">
                <div class="overflow-hidden rounded-3xl aspect-4/3 bg-gray-100 mb-6">
                    <img src="{{ asset('images/portfolio/4.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <p class="text-sm font-semibold text-black/50 tracking-wider uppercase mb-2">Marketing / SEO</p>
                <h3 class="text-2xl font-bold">Orbit Global Expansion</h3>
            </a>
        </div>
    </div>
</section>

@include('website.home.partials.cta')

@endsection
