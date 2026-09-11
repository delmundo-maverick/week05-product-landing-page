<nav class="sticky top-0 z-50 backdrop-blur-xl bg-black/60 border-b border-orange-500/20 shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/tnc-logo.jpg') }}" alt="TNC Logo" class="h-10 w-10 rounded-full border border-orange-500/50 shadow-[0_0_15px_rgba(255,85,0,0.5)]">
                <span class="text-2xl font-extrabold tracking-wider text-white uppercase">TNC <span class="text-orange-500">Cyber Cafe</span></span>
            </a>

            <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-300">
                <a href="#hero" class="hover:text-orange-400 transition-colors">Home</a>
                <a href="#services" class="hover:text-orange-400 transition-colors">Services & Tiers</a>
                <a href="#pricing" class="hover:text-orange-400 transition-colors">Rates</a>
                <a href="#testimonials" class="hover:text-orange-400 transition-colors">Reviews</a>
            </div>

            <div class="hidden md:flex items-center">
                <x-button variant="primary" href="#branches">Find a Branch</x-button>
            </div>
        </div>
    </div>
</nav>
