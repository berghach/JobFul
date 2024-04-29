<aside class="fixed top-32 left-0 z-50 flex bg-primary w-64 h-screen p-4 pe-0 max-md:-left-64">
    <div class="text-white w-full">
        <ul class=" text-xl font-semibold flex flex-col gap-2 w-full">
            <a class=" w-full ps-2 py-1 rounded-s-xl {{request()->routeIs('admin-dashboard')||request()->routeIs('operator-dashboard') ? 'bg-secondary' : ''}}" href={{ Auth::user()->role->name === 'admin' ? route('admin-dashboard') : route('operator-dashboard') }}>
                <li class="inline-flex items-center gap-2"><i data-feather="activity"></i>Dashboard</li>
            </a>
            <hr>
            <a class=" w-full ps-2 py-1 rounded-s-xl" href="">
                <li class="inline-flex items-center gap-2"><i data-feather="users"></i>Users</li>
            </a>
            <hr>    
            <a class=" w-full ps-2 py-1 rounded-s-xl" href="">
                <li class="inline-flex items-center gap-2"><i data-feather="briefcase"></i>Companies</li>
            </a>
            <hr>
            <a class=" w-full ps-2 py-1 rounded-s-xl" href="">
                <li class="inline-flex items-center gap-2"><i data-feather="folder"></i>Applications</li>
            </a>
            <hr>
            <a class=" w-full ps-2 py-1 rounded-s-xl" href="">
                <li class="inline-flex items-center gap-2"><i data-feather="book-open"></i>Posts</li>
            </a>
            <hr>
            <a class=" w-full ps-2 py-1 rounded-s-xl" href="">
                <li class="inline-flex items-center gap-2"><i data-feather="tag"></i>Tags</li>
            </a>
        </ul>
    </div>
</aside>