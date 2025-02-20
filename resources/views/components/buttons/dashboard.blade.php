<a href="{{ route('app.index') }}">
    <button 
        type="button"
        {{ $attributes->merge([
            'class' => 'text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center font-monserrat w-auto min-w-36'
        ])}}
    >
        <i class="fa-solid fa-chart-pie"></i>
        Dashboard
    </button>
</a>