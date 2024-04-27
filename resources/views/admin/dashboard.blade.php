{{-- <div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div> --}}

<x-layout title="Admin Dashboard">
    @foreach ($collection = App\Enums\Contract::getValues() as $item)
        <div>{{$item}}</div>
    @endforeach
    <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
    <div class=" text-red-600">{{Auth::user()->role()->first()->name}}</div>
    <div>{{ Auth::id() }}</div>
    <ul>
        @if (!$companies->isEmpty())
            @foreach ($companies as $company)
                <li>{{$company->name}}</li>
            @endforeach
        @else
            <h1 class="text-red-600">No companies</h1>
        @endif
    </ul>
    <ul>
        @foreach($tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
    {{-- @include('partials.add-company-form') --}}
</x-layout>
