<x-layout title="Admin Companies Dashboard">
    <section class="flex flex-col items-center lg:mt-32 lg:ps-64 p-4">
        <ul>
            @foreach ($companies as $company)
                <li>{{$company->name}}</li>
            @endforeach
        </ul>
    </section>
</x-layout>