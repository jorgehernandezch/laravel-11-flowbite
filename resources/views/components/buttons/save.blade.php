@props(['text' => ''])

<button 
    type="submit" 
    {{ $attributes->merge([
        'class' => 'text-white bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat'
    ])}}
>
    <i class="fa-solid fa-check"></i>
    Save {{ $text }}
</button>