@props(['text' => '','route' =>'','id' => null])

<a href="{{ route($route,$id) }}">
    <button 
        type="button" 
        {{ $attributes->merge([
            'class' => 'text-white bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat'
        ])}}
    >
        <i class="fa-solid fa-pen-to-square"></i>
        {{ $text }}
    </button>
</a>