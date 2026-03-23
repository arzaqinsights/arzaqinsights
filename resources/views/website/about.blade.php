@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-white/5 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Designing the Future <br> <span class="text-white/50">of Digital Business.</span>
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed mb-10 max-w-2xl mx-auto">
            Arzaq Insights is a premier technology and digital growth agency. We specialize in engineering seamless web ecosystems, developing robust scalable applications, and executing hyper-targeted marketing.
        </p>
    </div>
</section>

<!-- Values Section -->
<section data-theme="light" class="py-20 bg-white text-black rounded-3xl mt-2 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="aspect-square bg-gray-100 rounded-3xl overflow-hidden relative">
             <img src="{{ asset('images/about-vision.jpg') }}" alt="Our Vision" class="absolute inset-0 w-full h-full object-cover">
             <div class="absolute inset-0 bg-black/10"></div>
        </div>
        <div>
            <h2 class="text-4xl font-bold mb-6">Our Philosophy</h2>
            <p class="text-lg text-black/70 mb-8 leading-relaxed">
                We believe that software should be invisible to the user but immensely powerful for the business. Our team is driven by extreme attention to detail, a relentless pursuit of performance, and an unending obsession with design aesthetics.
            </p>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full border border-black/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg">Premium Aesthetic</h4>
                        <p class="text-black/60 text-sm">Design that speaks of quality, trust, and luxury.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full border border-black/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg">Scalable Architecture</h4>
                        <p class="text-black/60 text-sm">Code built to handle millions of interactions smoothly.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full border border-black/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg">AI-First Approach</h4>
                        <p class="text-black/60 text-sm">Integrating artificial intelligence to automate complexity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.home.partials.cta')

@endsection
