<button {{ $attributes->merge(['type' => 'button', 'class' => 'text-center px-4 py-2 bg-secondary rounded-full font-semibold text-xs text-white hover:text-secondary uppercase hover:bg-white   transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>