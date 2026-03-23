@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section data-theme="dark" class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-brand-black text-white rounded-3xl mt-2 px-6">
    <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top,var(--tw-gradient-stops))] from-white/10 via-brand-black to-brand-black pointer-events-none"></div>
    <div class="relative z-10 max-w-4xl mx-auto text-center border-b border-white/10 pb-20">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Let's Talk.
        </h1>
        <p class="text-lg md:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto">
            Ready to start a project or need consultation? Our team of experts is ready to transform your digital vision into reality.
        </p>
    </div>

    <!-- Contact Details & Form -->
    <div class="max-w-6xl mx-auto mt-20 grid md:grid-cols-2 gap-16 relative z-10">
        
        <!-- Info -->
        <div class="space-y-12">
            <div>
                <h3 class="text-sm font-semibold text-white/50 tracking-wider uppercase mb-2">Email Us</h3>
                <a href="mailto:hello@arzaqinsights.com" class="text-2xl font-medium hover:text-white/70 transition">hello@arzaqinsights.com</a>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-white/50 tracking-wider uppercase mb-2">Call Us</h3>
                <a href="tel:+1234567890" class="text-2xl font-medium hover:text-white/70 transition">+1 (234) 567-890</a>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-white/50 tracking-wider uppercase mb-2">Visit Us</h3>
                <p class="text-xl text-white/80 leading-relaxed">
                    123 Innovation Drive,<br>
                    Tech District, DT 90210<br>
                    United States
                </p>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 md:p-12">
            <h3 class="text-2xl font-semibold mb-8">Send a Message</h3>
            <form action="#" class="space-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm text-white/60 mb-2">First Name</label>
                        <input type="text" class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white/40 transition">
                    </div>
                    <div>
                        <label class="block text-sm text-white/60 mb-2">Last Name</label>
                        <input type="text" class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white/40 transition">
                    </div>
                </div>
                <div>
                     <label class="block text-sm text-white/60 mb-2">Email Address</label>
                     <input type="email" class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white/40 transition">
                </div>
                <div>
                     <label class="block text-sm text-white/60 mb-2">Project Details</label>
                     <textarea rows="4" class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-white/40 transition"></textarea>
                </div>
                <button type="submit" class="w-full bg-white text-black font-semibold rounded-xl py-4 hover:bg-white/90 transition text-lg">
                    Submit Inquiry
                </button>
            </form>
        </div>

    </div>
</section>

@endsection
