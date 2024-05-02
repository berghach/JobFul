<x-layout title="Admin Users Dashboard">
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>

</x-layout>
