@props(['title', 'price', 'description', 'features' => [], 'popular' => false])

<div
    class="relative p-6 sm:p-8 rounded-2xl bg-neutral-900/40 border {{ $popular ? 'border-orange-500 shadow-[0_0_30px_rgba(255,85,0,0.2)]' : 'border-neutral-800/80' }} backdrop-blur-xl flex flex-col justify-between">
    @if ($popular)
        <span
            class="absolute -top-3.5 right-6 bg-orange-600 text-white text-[10px] sm:text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-[0_0_15px_rgba(255,85,0,0.6)]">
            Most Popular
        </span>
    @endif
    <div>
        <h3 class="text-lg sm:text-xl font-bold text-white uppercase tracking-wide mb-2">{{ $title }}</h3>
        <p class="text-neutral-400 text-xs mb-6">{{ $description }}</p>
        <div class="flex items-baseline space-x-1 mb-6">
            <span class="text-3xl sm:text-4xl font-black text-white">₱{{ $price }}</span>
            <span class="text-neutral-400 text-xs sm:text-sm font-medium">/ hour</span>
        </div>
        <ul class="space-y-3 mb-8">
            @foreach ($features as $feature)
                <li class="flex items-center text-xs sm:text-sm text-neutral-300">
                    <svg class="w-4 h-4 text-orange-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>
    </div>
    <x-button variant="{{ $popular ? 'primary' : 'secondary' }}" href="#branches" class="w-full">
        Find Branch to Play
    </x-button>
</div>
