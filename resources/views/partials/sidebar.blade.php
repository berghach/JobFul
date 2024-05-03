<aside class="fixed top-32 left-0 z-50 flex bg-primary w-64 h-screen p-4 pe-0 max-lg:hidden">
    <div class="text-white w-full">
        <ul class=" text-xl font-semibold flex flex-col gap-2 w-full">
            <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200 {{request()->routeIs('admin-dashboard')||request()->routeIs('operator-dashboard') ? 'bg-secondary' : ''}}" href={{ Auth::user()->role->name === 'admin' ? route('admin-dashboard') : route('operator-dashboard') }}>
                <li class="inline-flex items-center gap-2"><i data-feather="activity"></i>Dashboard</li>
            </a>
            <hr>
            @if (Auth::user()->role->name === 'admin')
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200 {{request()->routeIs('users.index') ? 'bg-secondary' : ''}}" href="{{ route('users.index') }}">
                    <li class="inline-flex items-center gap-2"><i data-feather="users"></i>Users</li>
                </a>
                <hr>    
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200 {{request()->routeIs('companies.index') ? 'bg-secondary' : ''}}" href="{{ route('companies.index') }}">
                    <li class="inline-flex items-center gap-2"><i data-feather="briefcase"></i>Companies</li>
                </a>
                <hr>
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200" href="">
                    <li class="inline-flex items-center gap-2"><i data-feather="folder"></i>Applications</li>
                </a>
                <hr>
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200" href="">
                    <li class="inline-flex items-center gap-2"><i data-feather="book-open"></i>Posts</li>
                </a>
                <hr>
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200" href="">
                    <li class="inline-flex items-center gap-2"><i data-feather="tag"></i>Tags</li>
                </a>
            @else
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200" href="">
                    <li class="inline-flex items-center gap-2"><i data-feather="folder"></i>Applications</li>
                </a>
                <hr>
                <a class=" w-full ps-2 py-1 rounded-s-xl hover:bg-secondary ease-in-out duration-200" href="">
                    <li class="inline-flex items-center gap-2"><i data-feather="book-open"></i>Posts</li>
                </a>
            @endif
        </ul>
    </div>
</aside>
<div class="mt-32 lg:hidden ps-3">
    <button id="sidenav-button" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center rounded-full bg-primary" type="button">
        @switch(Route::currentRouteName())
            @case('admin-dashboard')
                <i data-feather="activity"></i>Dashboard
                @break
            @case('operator-dashboard')
                <i data-feather="activity"></i>Dashboard
                @break
            @case('users.index')
                <i data-feather="users"></i>Users
                @break
            @case('companies.index')
                <i data-feather="briefcase"></i>Companies
                @break
            @default
                
        @endswitch
        {{-- {{Route::currentRouteName()}} --}}
        <i data-feather="chevron-down"></i>
    </button>
    <div id="sidenav-states" class="z-10  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 gap-y-2">
            <li>
                <a href={{ Auth::user()->role->name === 'admin' ? route('admin-dashboard') : route('operator-dashboard') }} class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 {{request()->routeIs('admin-dashboard')||request()->routeIs('operator-dashboard') ? 'bg-primary' : ''}}">
                    <div class="inline-flex items-center gap-2">
                        <i data-feather="activity"></i>Dashboard
                    </div>
                </a>
            </li>
            @if (Auth::user()->role->name === 'admin')
                <li>
                    <a href="{{ route('users.index') }}" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 {{request()->routeIs('users.index') ? 'bg-primary' : ''}}">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="users"></i>Users
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('companies.index') }}" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 {{request()->routeIs('companies.index') ? 'bg-primary' : ''}}">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="briefcase"></i>Companies
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 ">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="folder"></i>Applications
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 ">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="book-open"></i>Posts
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 ">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="tag"></i>Tags
                        </div>
                    </a>
                </li>
            @else
                <li>
                    <a href="" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 ">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="folder"></i>Applications
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-primary ease-in-out duration-200 ">
                        <div class="inline-flex items-center gap-2">
                            <i data-feather="book-open"></i>Posts
                        </div>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>