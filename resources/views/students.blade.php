<x-layout>
    <x-slot:heading>
        Students
    </x-slot:heading>
    <ul>
        @foreach ($students as $student)
            <li>
                <a href="/student/{{$student->id}}" class="text-red-500 hover:underline">
                    {{$student->name}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>

