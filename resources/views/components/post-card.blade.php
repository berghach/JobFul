@props(['item' => $item])

<a href="{{route('posts.show', $item)}}" class="flex flex-col justify-between w-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
    <img class=" w-full rounded-t-lg" src={{$item->image ? Vite::asset($item->image()->first()->path) : Vite::asset('resources\images\profil_placeholder.png')}} alt="">
    <h5 class="mb-1 ps-4 pt-2 text-xl font-bold tracking-tight text-gray-900">{{$item->title}}</h5>
    <div class="flex flex-col justify-between p-4 leading-normal">
        <p class="mb-1 font-normal text-gray-700">{{$item->post_type}}</p>
        <p class="mb-1 font-normal text-gray-700">{{$item->location}}</p>
        <p class="mb-1 font-thin text-gray-700">{{$item->created_at->diffForHumans()}}</p>
        @if (Auth::user()->role->name === 'admin')
            <p class="mb-1 py-1 px-2 w-min font-bold text-gray-100 rounded-full {{$item->isValid === true ? 'bg-green-500' : 'bg-red-500'}}">{{$item->isValid ? 'valid' : 'invalid'}}</p>
        @endif
    </div> 
    <div class="flex justify-end items-center pe-4 pb-4">
        <p>more</p>
        <i data-feather="arrow-right"></i>
    </div>
</a>