@props([
    'active' => false,
])
<a {{ $attributes }} class=" {{ $active ? 'bg-indigo-950/50 text-white' : 'bg-gray-950/50 text-white' }} 
    rounded-md px-3 py-2 text-sm font-medium hover:bg-white/5 hover:text-white text-white">
    {{ $slot }}
</a>