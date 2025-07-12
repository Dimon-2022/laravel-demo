<x-layout>
    <x-slot:heading>
        {{$student->name}} {{$student->surname}}
    </x-slot:heading>
    <ul>
        @foreach ($student->books as $book)
            <li>{{$book->title}}</li>
        @endforeach
    </ul>
</x-layout>