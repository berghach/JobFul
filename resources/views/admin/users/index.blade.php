<x-layout title="Admin Users Dashboard">
    <section class="flex flex-col lg:mt-32 lg:ps-64 p-4">
        <div class=" max-w-7xl px-6 lg:px-8 ">
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:col-span-2">
            @foreach ($users as $item)
                <li>
                <div class="flex items-center gap-x-6 ">
                    <img class="h-16 w-16 rounded-full" src="{{Vite::asset($item->image ? $item->image()->first()->path : 'resources/images/profil_placeholder.png')}}" alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{$item->name}}</h3>
                        <p class="text-sm font-semibold leading-6 text-primary">{{$item->role->name === 'talent' ? $item->role->name ." / ". $item->talent_type : $item->role->name}}</p>
                    </div>
                </div>
                </li>
            @endforeach
            </ul>
        </div>
    </section>
</x-layout>
