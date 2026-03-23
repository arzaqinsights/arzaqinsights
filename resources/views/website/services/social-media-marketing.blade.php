@extends('layouts.app')

@section('content')
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,var(--tw-gradient-stops))] from-pink-900/20 via-brand-black to-brand-black pointer-events-none"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="text-white/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">Core Service</span>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Social Media Marketing
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto mb-10">
            Data-driven campaigns that convert. We leverage advanced targeting and compelling creatives to turn social platforms into high-yield acquisition engines.
        </p>
    </div>
</section>

<section data-theme="light" class="py-20 bg-white text-black px-6 rounded-3xl mt-2">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 border-b border-black/10 pb-16">
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Precision Targeting</h3>
            <p class="text-black/70 leading-relaxed">Identifying and capturing your most profitable audience segments using deep behavioral analytics.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Conversion Optimization</h3>
            <p class="text-black/70 leading-relaxed">Continuous A/B testing of ad creatives, copy, and funnels to lower CPA and maximize ROI.</p>
        </div>
        <div>
            <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl mb-6 shadow-xl">
                <i class="fa-solid fa-photo-film"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4">Creative Production</h3>
            <p class="text-black/70 leading-relaxed">High-end video, motion graphics, and static creatives engineered specifically to stop the scroll.</p>
        </div>
    </div>
</section>

@include('website.home.partials.cta')
@endsection
