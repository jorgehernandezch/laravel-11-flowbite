@section('title', '- Editar usuario')

<x-crud-index 
    model="Editar Usuario"
    text="Preencha todos os campos solicitados pelo sistema. Os campos com * são obrigatorios."
    route=""
    :create="false"
    :return="true" 
>
    @if(Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
        </div>
    @endif
    <div class="bg-white rounded-lg p-4 w-full">
        <form action="{{ route('app.users.update',$user->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="flex flex-wrap justify-start items-center gap-2">
                <div class="w-4/12">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <x-fas-user class="w-4 h-4 text-gray-400"/>
                        </div>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                            placeholder="name@flowbite.com"
                            value="{{ $user->name }}"
                        >
                    </div>
                </div>
                <div class="flex-1">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <x-fas-envelope class="w-4 h-4 text-gray-400"/>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                            placeholder="name@flowbite.com"
                            value="{{ $user->email }}"
                        >
                    </div>
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
        </form>
    </div>
</x-crud-index>