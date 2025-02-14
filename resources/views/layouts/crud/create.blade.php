<x-app-layout>
    <div class="px-8 py-6 min-h-full h-auto w-full">
        <div class="flex flex-row justify-between-items-center gap-3 mb-3">
            <div class="w-auto">
                <h3 class="text-2xl font-bold dark:text-white">
                    {{ $title }}
                </h3>
                {{ $text }}
            </div>
            <div class="flex justify-end gap-2 flex-1">
                @if($return)
                    <a href="{{ URL::previous() }}">
                        <x-buttons.danger class="max-h-10">
                            Voltar
                        </x-buttons.danger>
                    </a>
                @endif
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 w-full">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>