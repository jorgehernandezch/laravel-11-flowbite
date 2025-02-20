<x-app-layout>
    <div class="flex flex-col justify-content-between items-start lg:flex-row gap-4">
        <div>
            <h2 class="font-monserrat font-bold text-xl text-gray-900">
                Make a new User
            </h2>
            <h5 class="font-monserrat font-normal text-sm text-gray-600">
                Fill in the fields to create a new user.
                <span class="text-red-700">*</span>
                data required.
            </h5>
        </div>
        <div class="flex-1 flex justify-end gap-1">
            <x-buttons.back />
            <x-buttons.dashboard />
        </div>
    </div>
    <form action="{{ route('app.users.store') }}" method="POST">
        @csrf
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">Personal Information</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-text 
                    name="name" 
                    :errors="$errors" 
                    label="Name" 
                    placeholder="Enter the user name" 
                    icon="fa-user"
                    styles="w-2/4"
                    required
                />
                <x-input-text 
                    name="email" 
                    :errors="$errors" 
                    label="Email" 
                    placeholder="Enter the user email" 
                    icon="fa-envelope"
                    styles="md:w-1/2 lg:w-1/4 xl:w-1/4 2xl:w-1/4"
                    required
                />
                <x-input-text 
                    name="whatsapp" 
                    :errors="$errors" 
                    label="Whatsapp" 
                    placeholder="(00) 90000-0000" 
                    icon="fa-mobile"
                    styles="w-1/4"
                    required
                />
            </div>
        </div>
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">Complement Information</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-text 
                    name="twitter" 
                    :errors="$errors" 
                    label="Twitter" 
                    placeholder="Enter twitter" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                />
                <x-input-text 
                    name="facebook" 
                    :errors="$errors" 
                    label="Facebook" 
                    placeholder="Enter facebook" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                />
                <x-input-text 
                    name="instagram" 
                    :errors="$errors" 
                    label="Instagram" 
                    placeholder="Enter instagram" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                />
                <x-input-text 
                    name="youtube" 
                    :errors="$errors" 
                    label="Youtube" 
                    placeholder="Enter youtube" 
                    icon="fa-chalkboard"
                    styles="w-1/4"
                />
                <x-input-text-area
                    id="about_me"
                    name="about_me" 
                    :errors="$errors" 
                    label="About Me" 
                    placeholder="Enter some text about yourself" 
                    icon="fa-file-signature"
                    styles="w-full"
                />
            </div>
        </div>
        <div class="p-6 bg-white shadow rounded-lg mt-4">
            <h3 class="font-monserrat font-bold text-sm text-gray-800 mb-3">System Information</h3>
            <div class="flex flex-wrap -mx-1">
                <x-input-select 
                    id="role_id" 
                    :options="$roles" 
                    name="role_id"
                    label="Role"
                    icon="fa-user-tie"
                    required
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