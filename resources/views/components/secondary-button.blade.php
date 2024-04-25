<button {{ $attributes->merge([ 'class' => 'text-center bg-secondary rounded-full font-semibold text-xs text-white hover:text-secondary uppercase hover:bg-white   transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>