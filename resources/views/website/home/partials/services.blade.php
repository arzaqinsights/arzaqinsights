@php
$services = [
[
"label" => "Web Development",
"icon" => "fa-code",
"url" => "/services/web-development",
"img" => "/images/services/web.jpg",
"desc" => "Development of websites and web applications"
],
[
"label" => "App Development",
"url" => "/services/app-development",
"desc" => "Development & Design of mobile applications",
"img" => "/images/services/app.jpg",
"icon" => "fa-mobile-alt",
],
[
"label" => "Social Media Marketing",
"url" => "/services/social-media-marketing",
"desc" => "Social Media Marketing for business growth",
"img" => "/images/services/social-media-marketing.jpg",
"icon" => "fa-bullhorn",
],
[
"label" => "Social Media Management",
"url" => "/services/social-media-management",
"desc" => "Social Media Management for business growth",
"img" => "/images/services/social-media-management.jpg",
"icon" => "fa-users",
],
[
"label" => "SEO & SEM",
"url" => "/services/seo-sem",
"desc" => "SEO & SEM for business growth and visibility",
"img" => "/images/services/seo-sem.jpg",
"icon" => "fa-search",
],
[
"label" => "AI Automation",
"url" => "/services/ai-automation",
"desc" => "Automation & AI Solutions for business processes",
"img" => "/images/services/ai-automation.svg",
"icon" => "fa-robot",
],
];
@endphp
<section data-theme="light" class="mt-10 py-10 p-2 container text-brand-black rounded-3xl relative overflow-hidden">

    <div class="relative z-20">

        <!-- Heading -->
        <div class="mb-16">
            <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">What we do</span>
            <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight">
                Services <span class="text-brand-black/40">we offer.</span>
            </h2>
            <p class="text-brand-black/80 mt-4 max-w-xl">
                Powerful digital solutions designed to scale your business with speed, intelligence, and precision.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" data-theme="dark">

            @foreach($services as $service)
            <a href="{{ $service['url'] }}"
                class="group relative rounded-3xl overflow-hidden aspect-square block">

                <!-- Background Image -->
                <img src="{{ asset($service['img'] ?? null) }}"
                    class="absolute inset-0 w-full h-full object-cover 
                group-hover:scale-110 transition duration-500">

                <!-- Dark Gradient Overlay -->
                <div class="absolute inset-0 bg-linear-to-t from-black/90 via-black/20 to-transparent z-10"></div>

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex flex-col justify-end p-6">

                    <div class="flex items-center gap-3 mb-3">
                        <!-- Icon -->
                        <div class="text-lg text-white">
                            <i class="fas {{ $service['icon'] }}"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-semibold text-white">
                            {{ $service['label'] }}
                        </h3>
                    </div>

                    <!-- Description -->
                    <p class="text-white/70 text-sm leading-relaxed line-clamp-2">
                        {{ $service['desc'] }}
                    </p>

                    <!-- CTA -->
                    <div class=" relative w-40 mt-4 text-brand-white font-semibold rounded-full group/btn">
                        Explore
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </div>

                </div>

            </a>
            @endforeach

        </div>

    </div>

</section>