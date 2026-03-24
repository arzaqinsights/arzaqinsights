<section data-theme="dark" style="background-image: url('{{ asset('images/hero.jpg') }}'); background-size: cover; background-position: center;">
    <div class="relative h-dvh container flex items-end justify-start p-6 md:p-12 overflow-hidden rounded-3xl">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60 z-10"></div>

        <!-- Gradient Glow -->
        <div class="absolute inset-0 bg-linear-to-tr from-black via-black/10 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 max-w-2xl text-white flex flex-col gap-6">

            <!-- Badge -->
            <span class="w-fit text-xs tracking-widest uppercase bg-white/10 backdrop-blur px-4 py-1 rounded-full border border-white/20">
                AI Powered Digital Agency
            </span>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Build. Automate. <br>
                <span class="text-white/70">Scale Your Business</span>
            </h1>

            <!-- Description -->
            <p class="text-white/80 text-base md:text-lg leading-relaxed">
                We craft high-performance web apps, SaaS platforms, and AI-driven automation systems
                that help businesses grow faster, smarter, and more efficiently.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-2">
                <a href="#"
                    class="pl-6 py-3 pr-16 w-full relative md:w-auto bg-brand-white text-brand-black font-semibold rounded-full group/btn">
                    Let's Talk
                    <span class="bg-brand-black absolute right-1 top-1.25 text-brand-white rounded-full py-2 px-2.5 ml-4"><i class="fa-solid fa-arrow-right -rotate-45 group-hover/btn:rotate-0 transition-all duration-300"></i></span>
                </a>

                <a href="#"
                    class="px-6 py-3 border border-white/30 rounded-full w-full md:w-auto">
                    Explore Case Studies
                </a>
            </div>

            <!-- Stats -->
            <div class="flex gap-8 mt-6 text-sm text-white/70">
                <div>
                    <p class="text-xl font-bold text-white">50+</p>
                    <p>Projects Delivered</p>
                </div>
                <div>
                    <p class="text-xl font-bold text-white">100%</p>
                    <p>Client Satisfaction</p>
                </div>
                <div>
                    <p class="text-xl font-bold text-white">24/7</p>
                    <p>Support Available</p>
                </div>
            </div>

        </div>

        <!-- Floating Blur Element (depth effect) -->
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-white/10 blur-3xl rounded-full z-10"></div>

    </div>

</section>