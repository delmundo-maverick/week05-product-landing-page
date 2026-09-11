@props(['photo' => null, 'name', 'position', 'review'])

<div class="p-6 rounded-2xl bg-neutral-900/30 border border-neutral-800/80 backdrop-blur-xl flex flex-col justify-between hover:border-orange-500/40 transition-all duration-300">
    <p class="text-neutral-300 text-sm leading-relaxed italic mb-6">"{{ $review }}"</p>
    <div class="flex items-center space-x-4">
        <!-- Customer Photo Placeholder -->
        <div class="w-12 h-12 rounded-full overflow-hidden bg-neutral-950 ring-2 ring-orange-500/40 flex-shrink-0 flex items-center justify-center">
            @if($photo)
                <img src="{{ $photo }}" alt="{{ $name }}" class="w-full h-full object-cover">
            @else
                <span class="text-xs font-bold text-orange-400 font-mono">{{ strtoupper(substr($name, 0, 2)) }}</span>
            @endif
        </div>
        <div>
            <h4 class="text-sm font-bold text-white uppercase tracking-wider">{{ $name }}</h4>
            <p class="text-xs text-orange-400/80 font-medium">{{ $position }}</p>
        </div>
    </div>
</div>
