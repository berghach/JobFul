<x-layout title="Admin Users Dashboard">
    <section class="flex flex-col items-center lg:mt-32 lg:ps-64 p-4">
        <ul>
            @foreach ($users as $user)
                <li>{{$user->name}}</li>
            @endforeach
        </ul>
    </section>

</x-layout>
