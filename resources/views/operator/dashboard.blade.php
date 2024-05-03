{{-- <div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div> --}}
<x-layout title="Operator Dashboard">
    <section class="flex flex-col items-center lg:mt-32 lg:ps-64 p-4">
        <div class=" text-red-600">{{Auth::user()->role->name}}</div>
        <form action={{ route('logout') }} method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @foreach ($collection = App\Enums\PostType::getValues() as $item)
            <div>{{$item}}</div>
        @endforeach
    </section>
</x-layout>