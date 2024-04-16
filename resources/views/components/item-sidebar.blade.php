<li class="hover:bg-gray-600 transition rounded-md {{ '/'.Request::path() == $path ? 'bg-primary' : 'bg-transparent' }}">
    <a class="flex items-center p-2 text-gray-900 rounded-lg" href="{{ $path }}">
        {{ $slot }}
        <span class="flex-1 ms-3 whitespace-nowrap text-white">{{ $item }}</span>
        @isset($notification)
            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                {{ $notification }}
            </span>
        @endisset
    </a>
</li>