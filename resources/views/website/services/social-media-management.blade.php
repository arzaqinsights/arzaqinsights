@extends('layouts.app')

@section('content')
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,var(--tw-gradient-stops))] from-purple-900/20 via-brand-black to-brand-black pointer-events-none"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="text-white/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Core Service</span>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Social Media Management
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto mb-10">
            Building digital authority and community. We handle your entire social presence, delivering premium content that aligns with your brand's voice.
        </p>
    </div>
</section>

<section data-theme="light" class="py-20 bg-white text-black px-6 rounded-3xl mt-2">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 border-b border-black/10 pb-16">
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-pen-nib"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Content Strategy</h3>
            <p class="text-black/70 leading-relaxed">Curated content calendars designed to engage your audience and build long-term brand equity.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-users"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Community Building</h3>
            <p class="text-black/70 leading-relaxed">Active engagement, comment moderation, and relationship management with your followers.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Insights & Analytics</h3>
            <p class="text-black/70 leading-relaxed">Detailed monthly reporting on growth, reach, and engagement metrics to guide future strategy.</p>
        </div>
    </div>
</section>

@include('website.home.partials.cta')
@endsection
