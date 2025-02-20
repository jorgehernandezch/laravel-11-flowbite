<div class="{{ $styles }} mb-2 px-1">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 font-monserrat">
        {{ $label }} <span class="text-red-700">{{ $required ? '*' : '' }}</span>
    </label>
    <div class="flex">
        <span 
            class="inline-flex items-center px-3 text-sm text-gray-900 border rounded-e-0 border-e-0 rounded-s-md bg-gray-200 
            {{ $errors->first($name) ? 'border-red-400' : 'border-gray-300' }}"
        >
            <i class="fa-solid {{ $icon }} {{ $errors->first($name) ? 'text-red-600':'text-gray-500'}}"></i>
        </span>
        <select id="{{ $id }}" 
            class="bg-gray-50 border {{ $errors->first($name) ? 'border-red-400' : 'border-gray-300' }} text-gray-900 text-sm rounded-e-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 font-monserrat"
            name="{{ $name }}"
            @if($onChange) onchange="{{ $onChange }}(this)" @endif
        >
            <option disabled {{ $selected ? '' : 'selected' }}>
                Select a option
            </option>
            @foreach($options as $key => $value)
                <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>
