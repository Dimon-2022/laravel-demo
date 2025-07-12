<x-layout>
    <x-slot:heading>
        Books
    </x-slot:heading>
    <ul>
        @foreach ($books as $book)
        <li>
            <a href="/book/{{$book->id}}" class="text-blue-500 hover:underline">
                {{$book->title}} written by {{$book->author}}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
