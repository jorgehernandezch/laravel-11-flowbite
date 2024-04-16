<x-app-layout>
    <div class="px-8 py-6 min-h-full h-auto w-full">
        <div class="flex flex-row justify-between-items-center gap-3 mb-3">
            <div class="w-auto">
                <h3 class="text-2xl font-bold dark:text-white">
                    {{ $model }}
                </h3>
                <p class="text-sm font-normal text-gray-500">
                    {{ $text }}
                </p>
            </div>
            <div class="flex justify-end gap-2 flex-1">
                @if($create)
                    <a href="{{ route($route) }}">
                        <x-buttons.success class="max-h-10">
                            Criar {{ $model }}
                        </x-buttons.success>
                    </a>
                @endif
                @if($dashboard)
                    <a href="{{ route('app.index') }}">
                        <x-buttons.secondary class="max-h-10">
                            Dashboard
                        </x-buttons.secondary>
                    </a>
                @endif
                @if($return)
                    <a href="{{ URL::previous() }}">
                        <x-buttons.danger class="max-h-10">
                            Voltar
                        </x-buttons.danger>
                    </a>
                @endif
            </div>
        </div>
        {{ $slot }}
    </div>
</x-app-layout>