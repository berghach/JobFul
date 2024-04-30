
<x-layout title="Homepage">
    <div class=" max-md:hidden flex flex-row gap-4 w-1/2 items-center">
        <a href="#" class=" flex flex-col h-11 w-11 items-center">
            <img class="inline-block rounded-full ring-2 ring-white" src={{ Auth::user()->images->first() ? Auth::user()->images->where('name', 'profil')->url : Vite::asset('resources/images/profil_placeholder.png') }} alt="">
        </a>
        <div class=" bg-white rounded-2xl h-14 w-full">
            <button type="button" class="w-full h-full text-start text-gray-500 rounded-2xl px-4" onclick="togglePostForm()">Post here...</button>
        </div>
    </div>
    <div id="crud-modal-post" tabindex="-1" aria-hidden="true" class="hidden absolute top-0 z-50 flex justify-center w-full h-screen bg-slate-500/30">
        <div class="relative flex justify-center items-center md:p-4 md:w-2/3 h-full w-full max-h-full">
            <!-- Modal content -->
            <div class="relative grid bg-white pb-2 rounded-lg w-full h-4/5 ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Create a post
                    </h3>
                    <button type="button" onclick="togglePostForm()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                        <i data-feather="x"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class=" relative p-4 h-full scroll-pb-2 overflow-y-scroll">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div id="post-type-field" class="col-span-2">
                            <p class="block mb-2 text-sm font-medium text-gray-900">Post type</p>
                            <ul class="flex flex-col md:flex-row w-full gap-1">
                                @foreach ($postTypes as $item)
                                    <li class=" w-full ">
                                        <input class="hidden peer" type="radio" name="post_type" value="{{$item}}" id="{{$item}}" required autofocus>
                                        <label class=" inline-flex justify-center align-middle w-full text-md border-2 px-5 hover:bg-primary cursor-pointer border-secondary rounded-xl peer-checked:bg-primary" for="{{$item}}">{{$item}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="text" name="title" id="title" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Title" required autocomplete="name">
                        </div>
                        <div class="col-span-2">
                            <label for="industry" class="block mb-2 text-sm font-medium text-gray-900">Industry</label>
                            <select name="industry" id="industry" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                                <option value="" disabled selected>Choose industry</option>
                                @foreach ($industries as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="function" class="block mb-2 text-sm font-medium text-gray-900">Function</label>
                            <select name="function" id="function" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                                <option value="" disabled selected>Choose function</option>
                                @foreach ($functions as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900  rounded-2xl border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="About your post..." required autocomplete="description"></textarea>                    
                        </div>
                        <div class="col-span-2">
                            <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Tags</label>
                            <input type="text" name="tags" id="tags" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="#tag..." required autocomplete="name">
                        </div>
                        <div class="col-span-2">
                            <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                            <select name="location" id="location" class=" border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="option">
                                <option value="" disabled selected>Choose location</option>
                                @foreach ($cities as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="post-extra-info" class="col-span-2 flex flex-col gap-4">
                            {{-- postExtraInfo() --}}
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class=" text-white inline-flex items-center bg-primary hover:bg-secondary font-medium rounded-2xl px-5 py-2.5 text-center">
                            <i data-feather="send"></i>
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    {{-- Recent posts --}}
    <div id="posts-container" class=" grid grid-cols-1 lg:grid-cols-4 w-full gap-3 justify-center pt-3">
        @foreach ($posts as $item)
            <a href="#" class="flex flex-col items-center w-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img class=" w-full rounded-t-lg" src={{$item->image() ? Vite::asset($item->image()->first()->path) : Vite::asset('resources\images\profil_placeholder.png')}} alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$item->title}}</h5>
                    <p class="mb-3 font-normal text-gray-700">{{$item->post_type}}</p>
                </div> 
            </a>
        @endforeach
    </div>
    
</x-layout>
