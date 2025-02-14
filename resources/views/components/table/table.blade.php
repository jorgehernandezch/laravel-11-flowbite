<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-white uppercase bg-primary">
        <tr>
            <th scope="col" class="p-4 w-4"></th>
            @foreach ($headers as $header )
                <th scope="col" class="px-6 py-3 w-auto">
                    {{ $header }}
                </th>
            @endforeach
            <th scope="col" class="px-6 py-3 w-10">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="bg-white border-b hover:bg-gray-100">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" 
                            type="checkbox" 
                            class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2"
                        >
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                    <img class="w-10 h-10 rounded-full" src="/images/people/profile-picture-1.jpg" alt="{{ $user->name }}">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{ $user->name }}</div>
                        <div class="font-normal text-gray-500">{{ $user->email }}</div>
                    </div>  
                </th>
                <td class="px-6 py-4">
                    React Developer
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                    </div>
                </td>
                <td class=" px-6 py-4">
                    <div class="flex justify-end items-center gap-3">
                        <x-fas-eye class="w-5 h-5 text-yellow-400" />
                        <!-- Modal toggle -->
                        <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 hover:underline">
                            <x-fas-pen-to-square class="w-5 h-5 text-green-400" />
                        </a>
                        <x-fas-trash class="w-5 h-5 text-red-600" />
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>