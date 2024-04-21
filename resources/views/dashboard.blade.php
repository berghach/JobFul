{{-- <div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div> --}}

<x-layout>
    @foreach ($collection = App\Enums\Contract::getValues() as $item)
        <div>{{$item}}</div>
    @endforeach
    <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
    <div>{{Auth::user()->hasRole()->name}}</div>
    <form action={{ route('logout') }} method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>
