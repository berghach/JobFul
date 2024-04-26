{{-- <div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div> --}}
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-large font-semibold text-md text-gray-700 ']) }}>
    {{ $value ?? $slot }}
</label>