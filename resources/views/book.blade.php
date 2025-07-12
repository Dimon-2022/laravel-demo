<x-layout>
    <x-slot:heading>
        {{$book->title}}
    </x-slot:heading>
    <p>{{$book->description}}</p>
    <h3 class="text-red-500">This book was taken by {{$book->student->name}}</h3>
</x-layout>
