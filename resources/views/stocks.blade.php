<x-layout>
    <x-slot:heading>My stocks</x-slot:heading>
    <h1>My stocks:</h1>
    <ul>
    @foreach ($stocks as $stock)
        <li>
            <a href="/stock/{{$stock->id}}" class="text-blue-500 hover:underline">
                {{$stock->ticker}}-{{$stock->full_name}}
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>
