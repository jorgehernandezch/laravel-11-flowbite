<li>
    <a {{ $attributes->merge([
        'class' => 'flex items-center py-2 px-3 text-base font-medium text-gray-300 rounded-lg hover:text-gray-800 group hover:bg-gradient-to-l hover:from-sky-400 hover:via-sky-500 hover:to-sky-600',
        'href' => route($route),
    ]) }}>
        {{ $slot }}
        <span class="flex-1 ms-3 whitespace-nowrap font-monserrat">{{ $item }}</span>
        @isset($notification)
            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">
                {{ $notification }}
            </span>
        @endisset
    </a>
</li>
