@extends('layouts.app')

@section('content')
<div class="pt-24 lg:pt-32 pb-20 bg-brand-white min-h-screen">
    
    <!-- Hero Section -->
    <div class="container mx-auto px-6 max-w-5xl mb-16">
        <div class="flex items-center gap-4 text-brand-black/60 font-semibold uppercase tracking-widest text-sm mb-6">
            <span class="bg-brand-black/5 px-3 py-1 rounded-full border border-brand-black/10 text-brand-black">Web Design</span>
            <span>&bull;</span>
            <span>Oct 12, 2026</span>
            <span>&bull;</span>
            <span>5 Min Read</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold tracking-tight text-brand-black mb-10 leading-[1.1]">
            Mastering Glassmorphism in Modern Web Design
        </h1>
        
        <!-- Author Info -->
        <div class="flex items-center gap-4 mb-12">
            <div class="w-12 h-12 rounded-full bg-brand-gray/20 flex items-center justify-center overflow-hidden">
                <i class="fa-solid fa-user text-brand-black/50"></i>
            </div>
            <div>
                <p class="font-bold text-brand-black">Alex Mercer</p>
                <p class="text-sm text-brand-black/60">Lead Designer at Arzaq Insights</p>
            </div>
        </div>
        
        <div class="w-full aspect-video md:aspect-[21/9] rounded-[2rem] overflow-hidden bg-brand-gray/10 mb-16 shadow-xl relative">
            <img src="{{ asset('images/services.jpg') }}" class="w-full h-full object-cover" alt="Blog Feature Image">
        </div>
    </div>
    
    <!-- Article Content -->
    <div class="container mx-auto px-6 max-w-3xl">
        <article class="prose prose-lg md:prose-xl prose-headings:font-bold prose-headings:text-brand-black prose-p:text-brand-black/80 prose-a:text-brand-black prose-a:font-semibold prose-strong:text-brand-black marker:text-brand-black/50 mx-auto">
            
            <p class="text-xl md:text-2xl leading-relaxed text-brand-black/70 font-medium mb-10 border-l-4 border-brand-black pl-6">
                Glassmorphism has taken the digital design world by storm, offering a blend of subtle transparency, background blur, and vivid colors that create a sense of depth and hierarchy in user interfaces.
            </p>
            
            <h2 class="text-3xl font-bold mt-12 mb-6 text-brand-black">The Evolution of UI Design</h2>
            <p class="mb-6 text-brand-black/80 leading-relaxed">
                From flat design to neumorphism, UI design trends have constantly evolved over the last decade. Flat design stripped away textures and shadows in favor of simplicity, while neumorphism attempted to bring back realism using extrusion styling. Glassmorphism represents the next step—a perfect bridge between minimalism and 3D depth.
            </p>
            <p class="mb-6 text-brand-black/80 leading-relaxed">
                By utilizing the <code>backdrop-filter</code> CSS property, designers can now create frosted-glass effects directly in the browser without relying on heavy PNGs or complex hacks. This not only improves performance but also ensures responsive, dynamic interfaces.
            </p>

            <h2 class="text-3xl font-bold mt-12 mb-6 text-brand-black">Key Characteristics of Glassmorphism</h2>
            <ul class="list-disc pl-6 mb-8 text-brand-black/80 space-y-3">
                <li><strong class="text-brand-black">Multi-layered Approach:</strong> Objects floating in space, establishing a clear Z-axis hierarchy.</li>
                <li><strong class="text-brand-black">Translucency:</strong> A frosted-glass effect achieved using background blur.</li>
                <li><strong class="text-brand-black">Vibrant Colors:</strong> Placed beneath the glass layers to highlight the blur effect.</li>
                <li><strong class="text-brand-black">Subtle Borders:</strong> A thin, semi-transparent border to simulate the physical edge of glass.</li>
            </ul>

            <h2 class="text-3xl font-bold mt-12 mb-6 text-brand-black">Implementation in Tailwind CSS</h2>
            <p class="mb-6 text-brand-black/80 leading-relaxed">
                Implementing this style is surprisingly simple, especially with modern utility-first frameworks like Tailwind CSS. You simply define the background color with low opacity, add the backdrop-blur utility, and attach a subtle border.
            </p>
            <div class="bg-brand-black text-brand-white p-6 rounded-2xl mb-8 overflow-x-auto text-sm font-mono leading-relaxed">
                &lt;div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 shadow-xl"&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Content here --&gt;<br>
                &lt;/div&gt;
            </div>

            <h2 class="text-3xl font-bold mt-12 mb-6 text-brand-black">Conclusion</h2>
            <p class="mb-6 text-brand-black/80 leading-relaxed">
                While it's important not to overuse glassmorphism (as it can hurt accessibility and legibility if misapplied), when used selectively, it elevates modern web applications to feel highly premium and futuristic.
            </p>

        </article>
        
        <!-- Tags & Share -->
        <div class="mt-16 pt-8 border-t border-brand-black/10 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex gap-3">
                <span class="px-4 py-2 rounded-full border border-brand-black/10 text-sm font-semibold text-brand-black/70 hover:bg-brand-black/5 transition-colors cursor-pointer">#UIUX</span>
                <span class="px-4 py-2 rounded-full border border-brand-black/10 text-sm font-semibold text-brand-black/70 hover:bg-brand-black/5 transition-colors cursor-pointer">#DesignTrends</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-sm font-bold text-brand-black">Share:</span>
                <button class="w-10 h-10 rounded-full bg-brand-black text-brand-white flex items-center justify-center hover:bg-brand-black/80 transition-all"><i class="fa-brands fa-twitter"></i></button>
                <button class="w-10 h-10 rounded-full bg-brand-black text-brand-white flex items-center justify-center hover:bg-brand-black/80 transition-all"><i class="fa-brands fa-linkedin-in"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
