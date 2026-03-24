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
<section class="py-20 container text-brand-black">

    <!-- Heading -->
    <div class="mb-20 max-w-3xl">
        <span class="text-brand-black/50 uppercase tracking-[0.2em] text-sm font-semibold mb-4 block">
            What we do
        </span>

        <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight">
            Services <span class="text-brand-black/40">we offer.</span>
        </h2>

        <p class="text-brand-black/70 mt-6 text-lg leading-relaxed">
            We craft powerful digital solutions that help businesses grow faster, operate smarter, and stand out in a competitive world.
        </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($services as $service)
        <a href="{{ $service['url'] }}"
            class="group relative p-8 rounded-sm transition duration-500 bg-brand-black/10">

            <!-- Icon -->
            <div class="mb-6 text-2xl text-brand-black">
                <i class="fas {{ $service['icon'] }}"></i>
            </div>

            <!-- Title -->
            <h3 class="text-2xl font-bold mb-4 text-brand-black transition-all duration-300">
                {{ $service['label'] }}
            </h3>

            <!-- Description -->
            <p class="text-brand-black/70 leading-relaxed text-sm mb-6">
                {{ $service['desc'] }}
            </p>

            <!-- Extra filler text (premium feel ke liye) -->
            <p class="text-brand-black/50 text-sm leading-relaxed">
                We deliver scalable, high-performance solutions tailored to your business goals, ensuring long-term growth and digital success.
            </p>

            <!-- CTA -->
            <div class="mt-8 flex items-center gap-2 text-sm font-semibold text-brand-black">
                Explore
                <span class="transform transition-all duration-300">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>

        </a>
        @endforeach

    </div>

</section>