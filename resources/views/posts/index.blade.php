<x-layout title="Admin Posts Dashboard">
    <section class="flex flex-col items-center lg:mt-32 lg:ps-64 p-4">
        <div id="posts-container" class=" grid grid-cols-1 lg:grid-cols-4 w-full gap-3 justify-center pt-3 ps-3">
            @foreach ($posts as $item)
                <x-post-card :item="$item" />
            @endforeach
        </div>
    </section>
</x-layout>