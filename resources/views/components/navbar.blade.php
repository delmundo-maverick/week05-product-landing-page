<nav
    class="sticky top-0 z-50 backdrop-blur-xl bg-black/80 border-b border-orange-500/20 shadow-[0_4px_30px_rgba(0,0,0,0.5)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/TNC LOGO.jpg') }}" alt="TNC Logo"
                    class="h-8 w-8 sm:h-10 sm:w-10 rounded-full border border-orange-500/50 shadow-[0_0_15px_rgba(255,85,0,0.5)] object-cover">
                <span class="text-xl sm:text-2xl font-extrabold tracking-wider text-white uppercase">TNC</span>
            </a>

            <!-- Desktop Links -->
            <div
                class="hidden md:flex items-center space-x-6 lg:space-x-8 text-xs lg:text-sm font-medium text-slate-300">
                <a href="#hero" class="hover:text-orange-400 transition-colors">Home</a>
                <a href="#services" class="hover:text-orange-400 transition-colors">Services & Tiers</a>
                <a href="#pricing" class="hover:text-orange-400 transition-colors">Rates</a>
                <a href="#testimonials" class="hover:text-orange-400 transition-colors">Reviews</a>
            </div>

            <!-- Desktop CTA Button -->
            <div class="hidden md:flex items-center space-x-3">
                <x-button variant="primary" href="#branches">Find a Branch</x-button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex md:hidden items-center">
                <button id="mobile-menu-btn" type="button"
                    class="text-neutral-400 hover:text-white focus:outline-none p-2 rounded-lg border border-neutral-800 bg-neutral-900/60"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger Icon -->
                    <svg id="hamburger-icon" class="w-6 h-6 block" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon -->
                    <svg id="close-icon" class="w-6 h-6 hidden text-orange-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-neutral-950/95 border-b border-orange-500/30 backdrop-blur-2xl transition-all duration-200">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="#hero"
                class="mobile-link block px-3 py-2 rounded-lg text-sm font-medium text-slate-200 hover:bg-neutral-900 hover:text-orange-400 transition-all">Home</a>
            <a href="#services"
                class="mobile-link block px-3 py-2 rounded-lg text-sm font-medium text-slate-200 hover:bg-neutral-900 hover:text-orange-400 transition-all">Services
                & Tiers</a>
            <a href="#pricing"
                class="mobile-link block px-3 py-2 rounded-lg text-sm font-medium text-slate-200 hover:bg-neutral-900 hover:text-orange-400 transition-all">Rates</a>
            <a href="#testimonials"
                class="mobile-link block px-3 py-2 rounded-lg text-sm font-medium text-slate-200 hover:bg-neutral-900 hover:text-orange-400 transition-all">Reviews</a>
            <div class="pt-2">
                <x-button variant="primary" href="#branches" class="mobile-link w-full text-center">Find a
                    Branch</x-button>
            </div>
        </div>
    </div>
</nav>

<!-- Pure JavaScript Toggle Logic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            const isOpen = !mobileMenu.classList.contains('hidden');

            if (isOpen) {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                hamburgerIcon.classList.add('block');
                closeIcon.classList.add('hidden');
                closeIcon.classList.remove('block');
                menuBtn.setAttribute('aria-expanded', 'false');
            } else {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon.classList.add('hidden');
                hamburgerIcon.classList.remove('block');
                closeIcon.classList.remove('hidden');
                closeIcon.classList.add('block');
                menuBtn.setAttribute('aria-expanded', 'true');
            }
        }

        menuBtn.addEventListener('click', toggleMenu);

        // Close menu when a navigation link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });
        });
    });
</script>
