{{-- <div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div> --}}
<x-layout>
    @foreach ($collection = App\Enums\Contract::getValues() as $item)
        <div>{{$item}}</div>
    @endforeach
    <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
    <div class=" text-red-600">{{Auth::user()->role()->first()->name}}</div>
    <form action={{ route('logout') }} method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>