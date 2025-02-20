<x-app-layout>
    <div class="flex flex-row justify-content-between items-start">
        <div>
            <h2 class=" font-monserrat font-bold text-xl text-gray-900">
                Edit User
            </h2>
            <h5 class=" font-monserrat font-normal text-sm text-gray-600">
                Fill in the fields to edit the user.
                <span class="text-red-700">*</span>
                data required.
            </h5>
        </div>
        <div class="flex-1 flex justify-end gap-1">
            <x-buttons.back />
            <x-buttons.dashboard />
        </div>
    </div>
    <form action="{{ route('app.users.update',$user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">Informações Pessoais</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-text 
                    name="name" 
                    :errors="$errors" 
                    label="Nome" 
                    placeholder="Digite o nome do usuario" 
                    icon="fa-user"
                    styles="w-2/4"
                    value="{{ old('name') ? old('name') : $user->name }}"
                    required
                />
                <x-input-text 
                    name="email" 
                    :errors="$errors" 
                    label="Email" 
                    placeholder="Digite o email do usuario" 
                    icon="fa-envelope"
                    styles="w-1/4"
                    value="{{ old('email') ? old('email') : $user->email }}"
                    required
                />
                <x-input-text 
                    name="whatsapp" 
                    :errors="$errors" 
                    label="Whatsapp" 
                    placeholder="(00) 90000-0000" 
                    icon="fa-mobile"
                    value="{{ old('whatsapp') ? old('whatsapp') : $user->profile->whatsapp }}"
                    styles="w-1/4"
                    required
                />
            </div>
        </div>
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">Informações Complementares</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-text 
                    name="twitter" 
                    :errors="$errors" 
                    label="Twitter" 
                    placeholder="Digite o twitter" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                    value="{{ old('twitter') ? old('twitter') : $user->profile->twitter }}"
                />
                <x-input-text 
                    name="facebook" 
                    :errors="$errors" 
                    label="Facebook" 
                    placeholder="Digite o facebook" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                    value="{{ old('facebook') ? old('facebook') : $user->profile->facebook }}"
                />
                <x-input-text 
                    name="instagram" 
                    :errors="$errors" 
                    label="Instagram" 
                    placeholder="Digite o instagram" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                    value="{{ old('instagram') ? old('instagram') : $user->profile->instagram }}"
                />
                <x-input-text 
                    name="youtube" 
                    :errors="$errors" 
                    label="Youtube" 
                    placeholder="Digite o youtube" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                    value="{{ old('youtube') ? old('youtube') : $user->profile->youtube }}"
                />
                <x-input-text-area
                    name="about_me" 
                    :errors="$errors" 
                    label="Sobre Mim" 
                    placeholder="Digite algum texto sobre você" 
                    icon="fa-file-signature"
                    styles="w-full"
                    value="{{ old('about_me') ? old('about_me') : $user->profile->about_me }}"
                />
            </div>
        </div>
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">Informações Eclesiasticas</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-select 
                    id="role_id" 
                    :options="$roles" 
                    name="role_id"
                    label="Role"
                    icon="fa-user-tie"
                    required
                    selected="{{ old('role_id') ? old('role_id') : $user->roles->first()->id }}"
                />
            </div>
        </div>
        <div class="my-4">
            <x-buttons.save text="User" />
            <x-buttons.back />
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="{{asset('assets/js/mask.js')}}"></script>
</x-app-layout>