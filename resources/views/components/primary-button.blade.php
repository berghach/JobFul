{{-- <div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div> --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center px-4 py-2 bg-primary rounded-full font-semibold text-xs text-white uppercase hover:bg-secondary  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>