<x-app-layout>
    <div class="flex flex-row justify-content-between items-start">
        <div>
            <h2 class=" font-monserrat font-bold text-xl text-gray-900">
                Resumo do usuario
            </h2>
            <h5 class=" font-monserrat font-normal text-sm text-gray-600">
                Todas as informações do usuario
            </h5>
        </div>
        <div class="flex-1 flex justify-end gap-1">
            <x-buttons.edit route="app.users.edit" id="{{ $user->id }}" text="Edit User" />
            <x-buttons.back />
            <x-buttons.dashboard />
        </div>
    </div>
    <div class="flex flex-row justify-between items-start gap-5">
        <div class="w-full mt-4">
            <div class="p-4 bg-white shadow rounded-lg mb-4 flex flex-row justify-start items-start gap-5">
                <div class="bg-cyan-400 rounded-lg overflow-hidden w-56 max-w-60">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png" alt="" class="w-full h-auto">
                </div>
                <div>
                    <h3 class="font-monserrat font-bold text-xl text-gray-800 mb-3">
                        Dados Pessoais
                    </h3>
                    <p class="font-monserrat font-medium text-base text-gray-600">
                        <i class="fa-solid fa-person text-gray-600"></i>
                        Nome Completo: {{ $user->name }}
                    </p>
                    <p class="font-monserrat text-base text-gray-600 mb-3">
                        <i class="fa-solid fa-user-shield text-gray-600"></i>
                        Role: 
                        @foreach($user->getRoleNames() as $role)
                            <span class="capitalize inline-block {{ $role == 'admin' ? 'text-sky-500 font-bold' : '' }}">
                                {{ $role }}
                            </span>
                        @endforeach
                    </p>
                    <h5 class="font-monserrat font-medium text-base text-gray-600">
                        Email:
                    <p class="font-monserrat font-bold text-base text-gray-700 mb-3">
                        {{ $user->email }}
                    </p>
                    <p class="font-monserrat font-bold text-base text-gray-700 mb-3">Brasil</p>
                    <h5 class="font-monserrat font-medium text-base text-gray-600">
                        Whatsapp:
                    </h5>
                    <p class="font-monserrat font-bold text-base text-gray-700 mb-3">
                        {{ $user->profile->whatsapp ? $user->profile->whatsapp : 'Não informado'}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>