<x-app-layout>
    <div class="flex flex-row justify-content-between items-start">
        <div>
            <h2 class="font-monserrat font-bold text-xl text-gray-900">
                System Users
            </h2>
            <h5 class="font-monserrat font-normal text-base text-gray-600">
                All users registered in the system.
            </h5>
            <h5 class="font-monserrat font-semibold text-base text-gray-900">
                Total Users: {{ $users->total() }}
            </h5>
        </div>
        <div class="flex-1 flex justify-end gap-1">
            @hasanyrole('root|superadmin|admin')
                <x-buttons.new text="New User" route="app.users.create" />
            @endhasanyrole
            <x-buttons.dashboard />
        </div>
    </div>
    <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full min-w-[1000px] text-sm text-left text-gray-500 rounded-lg overflow-hidden font-monserrat" id="table">
            <thead class="text-xs text-gray-100 uppercase bg-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3 w-10">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Roles
                    </th>
                    <th scope="col" class="px-6 py-3 w-10">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($users->count() != 0)
                    @foreach($users as $user)
                        <tr class="odd:bg-white even:bg-gray-100 h-16">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-gray-900 whitespace-nowrap flex-1">
                                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                    <div class="ps-4 flex flex-col gap-1 whitespace-nowrap">
                                        <p class="text-base font-regular font-monserrat">
                                            {{ $user->name }}
                                        </p>
                                    </div>  
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-gray-900 whitespace-nowrap flex-1">
                                    <div class="flex flex-col gap-1">
                                        <p class="font-regular text-base text-gray-500 font-monserrat">
                                            {{ $user->email }}
                                        </p>
                                    </div>  
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-gray-900 whitespace-nowrap flex-1">
                                    <div class="flex flex-col gap-1">
                                        <p class="font-regular text-base font-monserrat">
                                            @foreach($user->getRoleNames() as $role)
                                                <span class="capitalize inline-block {{ $role == 'admin' ? 'text-sky-500 font-bold' : '' }}">
                                                    {{ $role }}
                                                </span>
                                            @endforeach
                                        </p>
                                    </div>  
                                </div>
                            </td>
                            <td class="px-6">
                                <div class="flex h-full items-center justify-center gap-1">
                                    <a href="{{ route('app.users.show',$user->id) }}" class="bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 hover:bg-gradient-to-br w-8 h-8 p-1 rounded-md flex items-center justify-center transition-opacity">
                                        <i class="fa-solid fa-eye text-gray-900"></i>
                                    </a>
                                    <a href="{{ route('app.users.edit',$user->id) }}" class="bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br w-8 h-8 p-1 rounded-md flex items-center justify-center transition-opacity">
                                        <i class="fa-solid fa-pen-to-square text-white"></i>
                                    </a>
                                    @hasanyrole('root|superadmin|admin')
                                    <a href="#" 
                                        onclick="event.preventDefault(); confirmDelete({{ $user->id }})"
                                        class="bg-gradient-to-r from-rose-400 via-rose-500 to-rose-600 hover:bg-gradient-to-br w-8 h-8 p-1 rounded-md flex items-center justify-center transition-opacity">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </a>
                                    <form id="delete-form-{{ $user->id }}" 
                                        action="{{ route('app.users.destroy', $user->id) }}" 
                                        method="POST" 
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    @endhasanyrole
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="odd:bg-white even:bg-gray-100 h-16">
                        <td class="px-6 py-4" colspan="5">
                            <p class="text-sm font-semibold font-monserrat text-center">
                                Não há usuarios cadastrados.
                            </p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-2">
        {{ $users->links() }}
    </div>
    @include('components.alert.success',['message' => Session::get('success')])
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmDelete(userId) {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Esta acción no se puede deshacer",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#f43f5e',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Aquí puedes enviar el formulario o hacer la petición para eliminar
                        document.getElementById('delete-form-' + userId).submit();
                    }
                });
            }
        </script>            
    @endpush
</x-app-layout>
