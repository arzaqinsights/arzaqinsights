@extends('layouts.app')

@section('content')
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,var(--tw-gradient-stops))] from-indigo-900/20 via-brand-black to-brand-black pointer-events-none"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="text-white/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Core Service</span>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            App Development
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto mb-10">
            Native and cross-platform mobile experiences that captivate users. We engineer apps that sit at the intersection of brilliant design and powerful functionality.
        </p>
    </div>
</section>

<section data-theme="light" class="py-20 bg-white text-black px-6 rounded-3xl mt-2">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 border-b border-black/10 pb-16">
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-brands fa-apple"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">iOS Excellence</h3>
            <p class="text-black/70 leading-relaxed">Swift-based applications optimized for the Apple ecosystem, delivering ultra-smooth performance.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-brands fa-android"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Android Mastery</h3>
            <p class="text-black/70 leading-relaxed">Kotlin and Java development ensuring your app performs brilliantly across all Android devices.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-mobile-screen"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Cross-Platform</h3>
            <p class="text-black/70 leading-relaxed">React Native and Flutter solutions that reduce time-to-market without sacrificing native feel.</p>
        </div>
    </div>
</section>

@include('website.home.partials.cta')
@endsection
