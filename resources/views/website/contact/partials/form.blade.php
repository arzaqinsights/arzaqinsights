<div class="p-8 md:p-12 lg:p-16 bg-brand-black text-brand-white rounded-[3rem] shadow-2xl relative overflow-hidden">
    <!-- Abstract Glows -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 blur-[80px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 blur-[80px] rounded-full pointer-events-none"></div>

    <div class="relative z-10">
        <h3 class="text-3xl font-bold mb-10 tracking-tight">Send us a message</h3>
        <form action="#" method="POST" class="space-y-8">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">First Name</label>
                    <input type="text" class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors text-lg" placeholder="John">
                </div>
                <div>
                    <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">Last Name</label>
                    <input type="text" class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors text-lg" placeholder="Doe">
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">Email Address</label>
                    <input type="email" class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors text-lg" placeholder="john@example.com">
                </div>
                <div>
                    <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">Phone Number</label>
                    <input type="tel" class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors text-lg" placeholder="+1 (234) 567-890">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">Services Interested In</label>
                <select class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors appearance-none cursor-pointer text-lg">
                    <option class="text-brand-black">Web Development</option>
                    <option class="text-brand-black">App Development</option>
                    <option class="text-brand-black">AI Automation</option>
                    <option class="text-brand-black">Digital Marketing</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-white/50 mb-3 uppercase tracking-widest">Message</label>
                <textarea rows="4" class="w-full bg-transparent border-b border-white/20 pb-4 text-white focus:outline-none focus:border-white transition-colors resize-none text-lg" placeholder="Tell us more about your project goals and timeline..."></textarea>
            </div>

            <button type="submit" class="w-full py-5 bg-brand-white text-brand-black font-bold rounded-full mt-10 hover:bg-brand-gray-200 transition-colors flex items-center justify-center gap-3 group text-lg tracking-wide">
                Submit Inquiry
                <i class="fa-solid fa-paper-plane transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
            </button>
        </form>
    </div>
</div>
