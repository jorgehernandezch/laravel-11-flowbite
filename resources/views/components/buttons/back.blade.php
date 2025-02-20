<a href="{{ URL::previous() }}">
    <button 
        type="button"
        {{ $attributes->merge([
            'class' => 'text-white bg-gradient-to-r from-rose-400 via-rose-500 to-rose-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat w-auto min-w-28'
        ])}}
    >
        <i class="fa-solid fa-rotate-left"></i>
        Back
    </button>
</a>