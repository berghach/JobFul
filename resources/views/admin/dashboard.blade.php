{{-- <div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div> --}}

<x-layout>
    {{-- @foreach ($collection = App\Enums\Contract::getValues() as $item)
        <div>{{$item}}</div>
    @endforeach
    <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
    <div class=" text-red-600">{{Auth::user()->role()->first()->name}}</div>
    <div>{{ Auth::id() }}</div> --}}
    @include('partials.add-company-form')
</x-layout>
