<label {{ $attributes->merge([
    'class' => 'block mb-2 text-sm font-medium text-gray-900'
]) }}>
    {{ $slot }}
    @isset($required)
    <span class="text-red-600">*</span> 
    @endisset
</label>
