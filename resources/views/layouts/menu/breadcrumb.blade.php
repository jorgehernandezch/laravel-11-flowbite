<nav class="flex ml-2" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ route('app.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary">
                <x-fas-home class="w-4 h-4 text-black mr-2" />
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <x-fas-angle-right class="w-4 h-4 text-gray-400 mr-2" />
                <a href="#" class="ms-1 text-sm font-medium capitalize text-gray-700 hover:text-blue-600 md:ms-2">
                    {{ Request::segment(1) }}
                </a>
            </div>
        </li>
        @if(Request::segment(2))
            <li aria-current="page">
                <div class="flex items-center">
                    <x-fas-angle-right class="w-4 h-4 text-gray-400 mr-2" />
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">
                        {{ Request::segment(2) }}
                    </span>
                </div>
            </li>
        @endif
        @if(Request::segment(3))
            <li aria-current="page">
                <div class="flex items-center">
                    <x-fas-angle-right class="w-4 h-4 text-gray-400 mr-2" />
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">
                        {{ Request::segment(3) }}
                    </span>
                </div>
            </li>
        @endif
    </ol>
</nav>