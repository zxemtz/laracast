@props(['active' => false])
<a 
    class="{{ request()->is('contact') || $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} 
    rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
