<div>
    <div class="group flex flex-col items-center space-y-1">
        <img src="{{ asset('icons/' . $icon) }}" alt="{{ $label }}"
            class="w-12 h-12 md:w-10 md:h-10 object-contain transition-transform duration-300 group-hover:scale-110">
        <span class="text-sm text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            {{ $label }}
        </span>
    </div>
</div>