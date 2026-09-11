@props([
    'variant' => 'primary',
    'href' => null,
])

@php
    $baseStyles = 'inline-flex items-center justify-center font-semibold rounded-xl px-6 py-3 transition-all duration-300 text-sm focus:outline-none';
    $variants = [
        'primary' => 'bg-orange-600 text-white hover:bg-orange-500 shadow-[0_0_20px_rgba(255,85,0,0.4)] hover:shadow-[0_0_30px_rgba(255,85,0,0.7)] border border-orange-500/50',
        'secondary' => 'bg-neutral-900/80 text-orange-400 hover:bg-neutral-800 border border-orange-500/30 backdrop-blur-sm hover:border-orange-500/60',
        'outline' => 'bg-transparent text-slate-300 border border-neutral-700 hover:border-orange-500/50 hover:text-orange-400',
    ];
    $classes = $baseStyles . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
