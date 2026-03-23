<footer class="bg-brand-black pt-20 pb-10 border-t border-white/10 text-brand-white" data-theme="dark">
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        
        <!-- Brand -->
        <div class="flex flex-col gap-6">
            <img src="{{ asset('images/logo.png') }}" alt="Arzaq Insights" class="h-14 mb-4 w-auto object-contain self-start invert">
            <p class="text-white/60 text-sm leading-relaxed">
                Elevating businesses with premium web design, scalable software, and intelligent AI automation. We build the future.
            </p>
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black transition-all">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black transition-all">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-black transition-all">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- Links -->
        <div>
            <h4 class="text-lg font-semibold mb-6">Company</h4>
            <ul class="space-y-4">
                <li><a href="/" class="text-white/60 hover:text-white transition-colors">Home</a></li>
                <li><a href="/services" class="text-white/60 hover:text-white transition-colors">Services</a></li>
                <li><a href="/about" class="text-white/60 hover:text-white transition-colors">About Us</a></li>
                <li><a href="/portfolio" class="text-white/60 hover:text-white transition-colors">Portfolio</a></li>
                <li><a href="/contact" class="text-white/60 hover:text-white transition-colors">Contact</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-lg font-semibold mb-6">Services</h4>
            <ul class="space-y-4">
                <li><a href="/services/web-development" class="text-white/60 hover:text-white transition-colors">Web Development</a></li>
                <li><a href="/services/app-development" class="text-white/60 hover:text-white transition-colors">App Development</a></li>
                <li><a href="/services/social-media-marketing" class="text-white/60 hover:text-white transition-colors">Social Media Marketing</a></li>
                <li><a href="/services/social-media-management" class="text-white/60 hover:text-white transition-colors">Social Media Management</a></li>
                <li><a href="/services/seo-sem" class="text-white/60 hover:text-white transition-colors">SEO & SEM</a></li>
                <li><a href="/services/ai-automation" class="text-white/60 hover:text-white transition-colors">AI Automation</a></li>
            </ul>
        </div>

        <!-- Newsletter / Contact -->
        <div>
            <h4 class="text-lg font-semibold mb-6">Stay Updated</h4>
            <p class="text-white/60 text-sm mb-4">Subscribe to our newsletter for insights and updates.</p>
            <form action="#" class="flex border border-white/20 rounded-full overflow-hidden p-1">
                <input type="email" placeholder="Your email address" class="bg-transparent text-white px-4 py-2 w-full focus:outline-none text-sm">
                <button type="submit" class="bg-white text-black px-6 py-2 rounded-full font-medium text-sm hover:bg-white/90 transition-all">Subscribe</button>
            </form>
        </div>

    </div>
    
    <div class="container border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between text-white/40 text-sm">
        <p>&copy; {{ date('Y') }} Arzaq Insights. All rights reserved.</p>
        <div class="flex gap-6 mt-4 md:mt-0">
            <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        </div>
    </div>
</footer>
