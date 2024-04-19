{{-- <div>
    <!-- Be present above all else. - Naval Ravikant -->
</div> --}}
@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge(['class' => 'h-10 ps-3 border-gray-300 border-2 rounded-xl shadow-sm']) !!}>