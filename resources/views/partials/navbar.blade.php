{{-- <div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div> --}}
<header class="bg-white">
    <!-- Desktop navbar -->
    <nav class=" hidden mx-auto lg:flex max-w-full items-center justify-between px-6 py-3 " aria-label="Global">
        <div class="flex items-center gap-x-5">
            <a href={{ route('home') }} class="m-1.5 p-1.5">
                <img class="h-9 w-auto" src={{ Vite::asset('resources/images/logo-green.png') }} alt="">
            </a>
            <div class=" inline-flex items-center gap-x-1 bg-gray-300 px-3 py-1.5 text-lg rounded-2xl">
                <i class=" text-gray-500" data-feather="search"></i>
                <input id="desktop-search" 
                        class="w-full ps-1 bg-transparent focus:outline-none autofill:bg-transparent" 
                        type="text" 
                        name="search" 
                        placeholder="Search" />
            </div>
        </div>  
        
        <div class="flex items-center gap-x-10 lg:justify-end me-4">
            <div class="flex gap-x-12">
                <a href={{ route('home') }} class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="home"></i>
                    <h1>Home</h1>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="briefcase"></i>
                    <h1>Applications</h1>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="message-square"></i>
                    <h1>Messages</h1>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="bell"></i>
                    <h1>Notifications</h1>
                </a>
            </div>
            <div class=" flex flex-col items-center">
                <a href="#" class=" flex flex-col items-center">
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src={{ Auth::user()->images->first() ? Auth::user()->images->where('name', 'profil')->url : Vite::asset('resources/images/profil_placeholder.png') }} alt="">
                </a>
                <div class=" inline-flex items-center gap-x-1 px-3 py-1.5 text-lg text-secondary ">
                    <h1 class=" inline-flex ">{{ explode(' ',Auth::user()->name)[0] }}</h1> {{-- to display only the first name --}}
                    <i id="profile-dropdown-trigger" style="animation: ease-in-out 0.3s; transform: rotate(0deg);" data-feather="chevron-down" class="text-gray-500" data-feather="chevron-down"></i>
                </div>
            </div>
            <ul id="profile-dropdown" class="absolute z-10 flex flex-col bg-white top-24 p-4 drop-shadow-lg gap-2 rounded-2xl hidden">
                <li>
                    <a class="inline-flex gap-x-2" href="">
                        <i data-feather="user"></i>My profile</a>
                </li>
                <hr>
                @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'operator')
                <li>
                    <a class="inline-flex gap-x-2" href="{{ Auth::user()->role->name === 'admin' ? route('admin-dashboard') : route('operator-dashboard') }}">
                        <i data-feather="activity"></i>Dashbord
                    </a>
                </li>
                <hr>
                @endif
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="inline-flex gap-x-2">
                            <i data-feather="log-out"></i>Log out</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Desktop navbar -->

    <!-- Mobile navbar -->
    <nav class="lg:hidden" aria-label="Global">
        <div class="mx-auto flex flex-col max-w-full items-center justify-between px-3 py-1.5" aria-label="Global">
            <div class="w-full flex justify-between items-center ">
                <a href={{ route('home') }} class="m-1.5 p-1.5">
                    <img class="h-9 w-auto" src={{ Vite::asset('resources/images/logo-green.png') }} alt="">
                </a>
                <div class="inline-flex items-center gap-x-3 px-3 py-1.5">
                    <i id="mobile-search-trigger"
                        data-feather="search"></i>
                    <i data-feather="plus-circle"></i>
                </div>
            </div>
            <div class="w-full flex justify-around items-center py-2">
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="home"></i>
                    <span class=" sr-only">Home</span>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="briefcase"></i>
                    <span class=" sr-only">Applications</span>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="message-square"></i>
                    <span class=" sr-only">Messages</span>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <i data-feather="bell"></i>
                    <span class=" sr-only">Notifications</span>
                </a>
                <a href="#" class="text-md flex flex-col items-center align-middle gap-y-2 font-semibold leading-6 text-secondary">
                    <img class="inline-block h-7 w-7 rounded-full ring-2 ring-white" src={{ Auth::user()->images->first() ? Auth::user()->images->where('name', 'profil')->url : Vite::asset('resources/images/profil_placeholder.png') }} alt="">
                    <span class=" sr-only">Profil</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Mobile navbar -->
    <!-- Mobile search -->
    <div id="mobile-search" class="hidden" aria-modal="true">
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center gap-x-5">
                <a href={{ route('home') }} class="m-1.5 p-1.5">
                    <img class="h-9 w-auto" src={{ Vite::asset('resources/images/logo-green.png') }} alt="">
                </a>
                <div class=" inline-flex items-center gap-x-1 bg-gray-300 px-3 py-1.5 text-lg rounded-2xl">
                    <i class=" text-gray-500" data-feather="search"></i>
                    <input id="mobile-search" 
                            class="w-full ps-1 bg-transparent focus:outline-none autofill:bg-transparent" 
                            type="text" 
                            name="search" 
                            placeholder="Search" />
                </div>
                <div class=" absolute right-3 top-3 text-gray-500">
                    <i id="mobile-search-close" data-feather="x-circle"></i>
                </div>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        {{-- Add content here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile search -->

  </header>
  