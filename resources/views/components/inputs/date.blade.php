<div class="relative mb-0">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        {{ $icone }}
    </div>
    <input 
        type="date"
        {{ $attributes->merge([
            'class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5'
        ]) }}
    >
</div>