@props(['image' => null, 'title', 'description', 'badge' => null])

<div class="group relative rounded-2xl bg-neutral-900/40 border border-neutral-800/80 backdrop-blur-xl overflow-hidden hover:border-orange-500/50 transition-all duration-300 hover:shadow-[0_0_30px_rgba(255,85,0,0.15)] flex flex-col justify-between">
    <div>
        <!-- Image Placeholder -->
        <div class="relative h-48 w-full bg-neutral-950 overflow-hidden border-b border-neutral-800/80">
            @if($image)
                <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            @else
                <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-neutral-900 to-black text-neutral-600 p-4 text-center">
                    <svg class="w-10 h-10 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span class="text-xs uppercase font-mono tracking-wider text-neutral-500">[ Image Placeholder: {{ $title }} ]</span>
                </div>
            @endif
            @if($badge)
                <span class="absolute top-3 right-3 bg-orange-600/90 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow-[0_0_10px_rgba(255,85,0,0.5)]">
                    {{ $badge }}
                </span>
            @endif
        </div>

        <div class="p-6">
            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-orange-400 transition-colors uppercase tracking-wide">{{ $title }}</h3>
            <p class="text-neutral-400 text-sm leading-relaxed">{{ $description }}</p>
        </div>
    </div>
</div>
