<x-app-layout>
    <x-hero />

    <!-- Services / Tiers Section -->
    <section id="services" class="py-20 border-t border-neutral-900 bg-neutral-950/60 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-black text-white uppercase tracking-wider mb-4">
                    Gaming <span class="text-orange-500">Tiers & Rigs</span>
                </h2>
                <p class="text-neutral-400 text-sm">High-end hardware tuned for competition, casual gaming, and content creation.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-feature-card
                    image=""
                    badge="Standard"
                    title="Regular Zone"
                    description="Intel Core i5, RTX 3060, 16GB RAM, and 144Hz monitors. Perfect for daily ranking games."
                />
                <x-feature-card
                    image=""
                    badge="VIP Esports"
                    title="VIP Zone"
                    description="Intel Core i7, RTX 4070, 32GB RAM, 240Hz monitors, and mechanical gaming gear."
                />
                <x-feature-card
                    image=""
                    badge="Pro Stage"
                    title="Tournament Suite"
                    description="Isolated soundproof rooms with RTX 4080 rigs, streaming setups, and ergonomic gaming chairs."
                />
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 border-t border-neutral-900 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-black text-white uppercase tracking-wider mb-4">Hourly <span class="text-orange-500">Gaming Rates</span></h2>
                <p class="text-neutral-400 text-sm">Flexible hourly options for every gamer.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-pricing-card
                    title="Regular Member"
                    price="35"
                    description="Accessible gaming performance for everyone."
                    :features="['Standard Rig Access', '144Hz Displays', 'High-Speed LAN Connection', 'Standard Peripheral Set']"
                />
                <x-pricing-card
                    title="VIP Gamer"
                    price="50"
                    description="For competitive players seeking ultra-smooth FPS."
                    :popular="true"
                    :features="['VIP Area Access', '240Hz Displays', 'RTX 4070 Rigs', 'Pro Mechanical Keyboards', 'Priority Food Service']"
                />
                <x-pricing-card
                    title="Pro Suite Room"
                    price="120"
                    description="Private team rooms built for scrimmage and streams."
                    :features="['5-Seat Private Room', 'RTX 4080 Rigs', 'Stream Cam & Mic Ready', 'Dedicated Fiber Line', 'Noise Cancelling Headsets']"
                />
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 border-t border-neutral-900 bg-neutral-950/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-black text-white uppercase tracking-wider mb-4">Player <span class="text-orange-500">Reviews</span></h2>
                <p class="text-neutral-400 text-sm">What local esports pros and casual gamers say about TNC.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-testimonial-card
                    photo=""
                    name="Mark 'Kulas' Santos"
                    position="Valorant Ranker"
                    review="Zero ping spikes during tournament matches. The 240Hz monitors in the VIP section are unmatched."
                />
                <x-testimonial-card
                    photo=""
                    name="Bea Reyes"
                    position="Streamer / Gamer"
                    review="The private suite room made running my 12-hour charity stream seamless. Clean equipment and great food!"
                />
                <x-testimonial-card
                    photo=""
                    name="Jomari Cruz"
                    position="Dota 2 Team Captain"
                    review="We always boot-camp at TNC before major qualifiers. Reliable rigs and comfortable seating for long grinds."
                />
            </div>
        </div>
    </section>

    <!-- Branches / CTA Section -->
    <section id="branches" class="py-20 border-t border-neutral-900 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center bg-gradient-to-b from-neutral-900/80 to-black p-12 rounded-3xl border border-orange-500/30 backdrop-blur-xl shadow-[0_0_50px_rgba(255,85,0,0.1)]">

            <!-- Branch Location Image Placeholder -->
            <div class="w-full h-48 rounded-xl bg-neutral-950 border border-neutral-800 flex flex-col items-center justify-center text-neutral-500 mb-8">
                <svg class="w-10 h-10 mb-2 opacity-50 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="text-xs uppercase font-mono tracking-wider">[ Image Placeholder: Branch Map / Cafe Interior Photo ]</span>
            </div>

            <h2 class="text-3xl sm:text-5xl font-black text-white uppercase tracking-tight mb-4">Ready to Level Up Your Game?</h2>
            <p class="text-neutral-400 max-w-xl mx-auto mb-8 text-sm">Find your nearest TNC Cyber Cafe branch across Metro Manila and provinces.</p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-button variant="primary" href="#" class="w-full sm:w-auto">Find Nearby TNC Branch</x-button>
                <x-button variant="secondary" href="#" class="w-full sm:w-auto">Inquire PC Reservations</x-button>
            </div>
        </div>
    </section>
</x-app-layout>
