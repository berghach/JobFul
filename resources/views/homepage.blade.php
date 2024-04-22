
<x-layout>
    @foreach ($collection = App\Enums\Contract::getValues() as $item)
        <div>{{$item}}</div>
    @endforeach
    @foreach ($collection = App\Models\Role::all() as $item)
        <div>{{$item->name}}</div>
    @endforeach
    <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
    @if (!empty($role = Auth::user()->role))
        <div>{{ Auth::user()->name }}</div>
        <div class=" bg-amber-400">{{ $role->name }}</div>
    @endif
    {{-- <a href={{ route('test') }}>test</a> --}}
    <form action={{ route('logout') }} method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>
