@props(['post' => $post])

<div class="flex flex-col ps-3 ">
    <div class="bg-gray-100 py-8 rounded-t-xl">
        <div class="container flex flex-col gap-1 mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{$post->title}}<small class="text-primary font-normal ms-2">{{$post->post_type}}</small></h1>
            <p class="text-gray-600 inline-flex gap-2"><i data-feather="clock" class="text-primary"></i>{{$post->created_at->diffForHumans()}}</p>
            <p class="text-gray-600 inline-flex gap-2"><i data-feather="map-pin" class="text-primary"></i>{{$post->location}}</p>
            <p class="text-gray-600 inline-flex gap-2"><i data-feather="user" class="text-primary"></i>{{$post->user->name}}</p>
        </div>
    </div>
    <div class="bg-white py-8 rounded-b-xl">
        <div class="container mx-auto px-4 flex flex-col max-md:gap-2 md:flex-row">
            <div class="w-full md:w-3/4 px-4">
                <img src="{{$post->image ? Vite::asset($post->image()->first()->path) : Vite::asset('resources\images\profil_placeholder.png')}}" alt="Blog Featured Image" class="mb-8">
                <div class=" max-w-none mb-4">
                    <p>{{$post->description}}</p>
                </div>
                <div class="flex gap-1 max-w-none text-xs">
                    @foreach ($post->tags as $item)
                        <p class="bg-gray-200 text-gray-800 px-2 py-1 rounded-2xl">#{{$item->name}}</p>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <div class="bg-gray-100 p-2">
                    <ul class="list-item">
                        <li class="mb-2 flex flex-wrap">
                            Industry: {{$post->industry}}
                        </li>
                        <li class="mb-2 flex flex-wrap">
                            Function: {{$post->function}}
                        </li>
                        <li class="mb-2">
                            {{isset($post->contract)?'Contract: '.$post->contract : ''}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
