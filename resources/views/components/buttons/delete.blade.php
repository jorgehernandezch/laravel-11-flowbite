@props(['text' => '','id' => ''])

<button 
    type="button"
    id="{{ $id }}" 
    {{ $attributes->merge([
        'class' => 'text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat'
    ])}}
>
    <i class="fa-solid fa-trash"></i>
    {{ $text }}
</button>