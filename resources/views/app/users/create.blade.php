@section('title', '- Criar usuario')

<x-crud-create
    title="Criar Usuario"
    :return="true" 
>
    <x-slot name="text">
        <p class="text-sm font-normal text-gray-500">
            Preencha todos os campos solicitados pelo sistema. Os campos com 
            <span class="text-red-600">*</span> 
            são obrigatorios.
        </p>
    </x-slot>
    <form action="{{ route('app.users.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-start items-center gap-2">
            <div class="w-4/12">
                <x-inputs.label for="name" required>
                    Nome
                </x-inputs.label>
                <x-inputs.text name="name" id="name" placeholder="Nome">
                    <x-slot name="icone">
                        <x-fas-user class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
            <div class="flex-1">
                <x-inputs.label for="email" required>
                    Email
                </x-inputs.label>
                <x-inputs.email name="email" id="email" placeholder="Email">
                    <x-slot name="icone">
                        <x-fas-envelope class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.email>
            </div>
            <div class="w-4/12">
                <x-inputs.label for="cpf" required>
                    CPF
                </x-inputs.label>
                <x-inputs.text name="cpf" id="name" placeholder="000.000.000-00">
                    <x-slot name="icone">
                        <x-fas-id-card class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
            <div class="w-4/12">
                <x-inputs.label for="telefone" required>
                    Telefone
                </x-inputs.label>
                <x-inputs.text name="telefone" id="telefone" placeholder="(00)00000-0000">
                    <x-slot name="icone">
                        <x-fas-phone class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
            <div class="flex-1">
                <x-inputs.label for="whatsapp" required>
                    Whatsapp
                </x-inputs.label>
                <x-inputs.text name="whatsapp" id="whatsapp" placeholder="(00)00000-0000">
                    <x-slot name="icone">
                        <x-fas-mobile class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
            <div class="w-4/12">
                <x-inputs.label for="data_nascimento" required>
                    Data de Nascimento
                </x-inputs.label>
                <x-inputs.text name="data_nascimento" id="data_nascimento" placeholder="00/00/0000">
                    <x-slot name="icone">
                        <x-fas-calendar class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
            <div class="w-4/12">
                <x-inputs.label for="cep">
                    CEP
                </x-inputs.label>
                <x-inputs.text name="cep" id="cep" placeholder="00000-000">
                    <x-slot name="icone">
                        <x-fas-location-dot class="w-4 h-4 text-gray-400"/>
                    </x-slot>
                </x-inputs.text>
            </div>
        </div>
        <x-buttons.success type="submit" class="mt-4">
            Guardar
        </x-buttons.success>
    </form>
</x-crud-create>