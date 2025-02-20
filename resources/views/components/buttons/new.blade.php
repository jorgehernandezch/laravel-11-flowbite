@props(['text' => '','route' =>''])

<a href="{{ route($route) }}">
    <button 
        type="button" 
        {{ $attributes->merge([
            'class' => 'text-white bg-gradient-to-r from-sky-400 via-sky-500 to-sky-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat'
        ])}}
    >
        <i class="fa-solid fa-plus"></i>
        {{ $text }}
    </button>
</a>