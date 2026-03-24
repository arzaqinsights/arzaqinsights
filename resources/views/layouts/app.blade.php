<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth bg-brand-black text-brand-light antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Arzaq Insights - Premium Tech Solutions & AI Automation for Business Growth">
    <title>Arzaq Insights | High-End Tech Solutions</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-h-screen flex flex-col selection:bg-brand-white selection:text-brand-black">

    <!-- Custom Cursor -->
    <div id="custom-cursor" class="fixed top-0 left-0 w-6 h-6 rounded-full border border-white/30 pointer-events-none z-9999 transform -translate-x-1/2 -translate-y-1/2 transition-transform duration-300 ease-out hidden md:block mix-blend-difference"></div>


    <!-- Navigation -->
    <nav id="navbar" class="flex justify-between items-center py-3 container fixed top-0 left-0 w-full z-50 transition-all duration-500">
        <img id="siteLogo" src="{{ asset('images/logo.png') }}" alt="Arzaq Insights" class="h-10 shrink-0 transition-all duration-300 invert">
        <div class="flex justify-between items-center gap-14 rounded-full pl-2 lg:pl-12 pr-2 py-2">
            @php
            $navlinks = [
            [
            "label" => "Home",
            "url" => "/",
            "submenu" => false,
            ],
            [
            "label" => "Services",
            "url" => "#",
            "submenu" => true,
            "submenu_id" => "services",
            "submenu_links" => [
            [
            "label" => "Web Development",
            "icon" => "fa-code",
            "url" => "/services/web-development",
            "desc" => "Development of websites and web applications"
            ],
            [
            "label" => "App Development",
            "url" => "/services/app-development",
            "desc" => "Development & Design of mobile applications",
            "icon" => "fa-mobile-alt",
            ],
            [
            "label" => "Social Media Marketing",
            "url" => "/services/social-media-marketing",
            "desc" => "Social Media Marketing for business growth",
            "icon" => "fa-bullhorn",
            ],
            [
            "label" => "Social Media Management",
            "url" => "/services/social-media-management",
            "desc" => "Social Media Management for business growth",
            "icon" => "fa-users",
            ],
            [
            "label" => "SEO & SEM",
            "url" => "/services/seo-sem",
            "desc" => "SEO & SEM for business growth and visibility",
            "icon" => "fa-search",
            ],
            [
            "label" => "AI Automation",
            "url" => "/services/ai-automation",
            "desc" => "Automation & AI Solutions for business processes",
            "icon" => "fa-robot",
            ],
            ],
            ],
            [
            "label" => "About",
            "url" => "/about",
            "submenu" => false,
            ],
            [
            "label" => "Portfolio",
            "url" => "/portfolio",
            "submenu" => false,
            ],
            [
            "label" => "Contact",
            "url" => "/contact",
            "submenu" => false,
            ],
            ];
            @endphp
            @foreach ($navlinks as $link)
            <div class="relative hidden lg:block">
                <a href="{{ $link['url'] }}" class="relative h-full submenu-trigger text-brand-white hover:text-brand-gray-400 transition-colors duration-300" @if($link['submenu']) onclick="toggleSubmenu('{{ $link['submenu_id'] }}');" @endif>
                    {{ $link['label'] }}
                    @if ($link['submenu'])
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                    @endif
                </a>
                @if($link['submenu'])
                <div id="{{ $link['submenu_id'] }}" onmouseleave="toggleSubmenu('{{ $link['submenu_id'] }}');" class="submenu hidden absolute top-12 left-0 bg-brand-white backdrop-blur-md rounded-sm p-6 w-96 space-y-6">
                    @foreach ($link['submenu_links'] as $submenu_link)
                    <div>
                        <div class="link flex gap-4 items-start">
                            @if ($submenu_link['icon'] ?? null)
                            <span class="w-10 h-10 shrink-0 flex items-center justify-center mt-1 bg-brand-black rounded-md">
                                <i class="fa-solid {{ $submenu_link['icon'] }} text-brand-white"></i>
                            </span>
                            @else
                            <span class="w-9.5"></span>
                            @endif
                            <div class="flex flex-col">
                                <a href="{{ $submenu_link['url'] }}" class="text-brand-black hover:text-brand-gray-400 mb-1 transition-colors duration-300 block w-full">{{ $submenu_link['label'] }}</a>
                                @if ($submenu_link['desc'] ?? null)
                                <p class="text-brand-black/50 text-[11px] hover:text-brand-gray-400 transition-colors duration-300 block w-full">{{ $submenu_link['desc'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            @endforeach
            <div class="right-menu flex items-center gap-4 relative">
                <a href="/contact" class="px-8 py-2 pr-1 hidden md:block bg-brand-white group/btn text-brand-black rounded-full font-medium hover:bg-brand-gray-200 transition-all duration-300 shadow-lg">
                    Let's Talk
                    <span class="bg-brand-black text-brand-white rounded-full p-2 ml-4"><i class="fa-solid fa-arrow-right -rotate-45 group-hover/btn:rotate-0 transition-all duration-300"></i></span>
                </a>
                <button onclick="toggleModal('auth_menu')" class="bg-brand-white hidden lg:block text-brand-black py-1.5 px-2 text-xl rounded-full font-medium hover:bg-brand-gray-200 transition-all duration-300 shadow-lg">
                    <i class="fa-regular fa-user"></i>
                </button>
                <div class="auth-menu absolute right-0 top-12 bg-brand-white rounded-3xl hidden shadow-lg p-6 w-60 space-y-6" id="auth_menu">
                    @if (!Auth::check())
                    <div class="flex flex-col gap-4">
                        <a href="" class="px-6 py-2 border rounded-full flex-1 group/btn flex items-center justify-between">Login <i class="fa-solid fa-arrow-right -rotate-45 group-hover/btn:rotate-0 transition-all duration-300"></i></a>
                        <a href="" class="px-6 py-2 border rounded-full flex-1 group/btn flex items-center justify-between">Register <i class="fa-solid fa-arrow-right -rotate-45 group-hover/btn:rotate-0 transition-all duration-300"></i></a>
                    </div>
                    @else
                    <a href="">Dashboard</a>
                    <a href="">Logout</a>
                    @endif
                </div>
                <button onclick="toggleMobileMenu()" class="bg-brand-white lg:hidden text-brand-black py-1.5 px-2 text-xl rounded-full font-medium hover:bg-brand-gray-200 transition-all duration-300 shadow-lg">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
        <div id="mobile_menu" class="h-dvh hidden overflow-y-scroll w-full bg-brand-black/90 backdrop-blur-sm fixed top-0 left-0 z-508 transform translate-x-full transition-all duration-500">
            <div class="flex justify-between items-center py-3 container sticky top-0">
                <img src="{{ asset('images/logo.png') }}" alt="Arzaq Insights" class="h-10 shrink-0 invert">
                <span class="bg-brand-white/20 backdrop-blur-md rounded-full p-2">
                    <button onclick="toggleMobileMenu()" class="bg-brand-white text-brand-black py-1.5 px-2 text-xl rounded-full font-medium hover:bg-brand-gray-200 transition-all duration-300 shadow-lg">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </span>
            </div>
            <div class="container h-full flex flex-col justify-start mt-6 overflow-y-scroll">
                @foreach ($navlinks as $link)
                <div class="relative mt-6">
                    <a href="{{ $link['url'] }}" class="relative h-full text-4xl font-black border-b flex items-center justify-between border-white/20 pb-6 overflow-y-scroll w-full submenu-trigger text-brand-white hover:text-brand-gray-400 transition-colors duration-300" @if($link['submenu']) onclick="toggleSubmenu('{{ $link['submenu_id'] }}_mobile');" @endif>
                        {{ $link['label'] }}
                        @if ($link['submenu'])
                        <i class="fa-solid fa-plus text-3xl"></i>
                        @endif
                    </a>
                </div>
                @if($link['submenu'])
                <div id="{{ $link['submenu_id'] }}_mobile" class="submenu hidden py-4 w-full space-y-6">
                    @foreach ($link['submenu_links'] as $submenu_link)
                    <div>
                        <div class="link flex gap-4 items-start">
                            @if ($submenu_link['icon'] ?? null)
                            <span class="w-10 h-10 shrink-0 flex items-center justify-center mt-1 bg-brand-white rounded-md">
                                <i class="fa-solid {{ $submenu_link['icon'] }} text-brand-black"></i>
                            </span>
                            @else
                            <span class="w-9.5"></span>
                            @endif
                            <div class="flex flex-col">
                                <a href="{{ $submenu_link['url'] }}" class="text-brand-white hover:text-brand-gray-400 mb-1 transition-colors duration-300 block w-full">{{ $submenu_link['label'] }}</a>
                                @if ($submenu_link['desc'] ?? null)
                                <p class="text-brand-white/50 text-[11px] hover:text-brand-gray-400 transition-colors duration-300 block w-full">{{ $submenu_link['desc'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="grow min-h-[50vh]">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')
    <script>
        function toggleSubmenu(element) {
            const submenu = document.getElementById(element);
            const submenuTrigger = document.querySelector('.submenu-trigger');
            submenuTrigger.addEventListener('click', function(e) {
                e.preventDefault();
            });
            submenu.classList.toggle('hidden');

            document.addEventListener('click', function(e) {
                if (!submenu.contains(e.target) && !e.target.closest('.submenu-trigger') && !e.target.closest('.submenu')) {
                    submenu.classList.add('hidden');
                }
            });

        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile_menu');

            if (mobileMenu.classList.contains('hidden')) {
                // Step 1: show element first
                mobileMenu.classList.remove('hidden');

                // Step 2: next frame me slide in
                setTimeout(() => {
                    mobileMenu.classList.remove('translate-x-full');
                }, 10);

            } else {
                // Step 1: slide out
                mobileMenu.classList.add('translate-x-full');

                // Step 2: animation ke baad hidden lagao
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300); // duration match karo
            }
        }
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 50) {
                navbar.classList.add(
                    "bg-brand-black/90",
                    "shadow-lg"
                );
            } else {
                navbar.classList.remove(
                    "bg-brand-black/90",
                    "shadow-lg"
                );
            }
        });
    </script>

</body>

</html>