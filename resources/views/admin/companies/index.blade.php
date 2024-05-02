<x-layout title="Admin Companies Dashboard">
    <ul>
        @foreach ($companies as $company)
            <li>{{$company->name}}</li>
        @endforeach
    </ul>
</x-layout>