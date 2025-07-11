<x-layout heading="About us">
   <x-slot:heading>
    Job listings
   </x-slot:heading>
   
   <ul>
        @foreach ($jobs as $job)
       <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                <strong>{{$job->title}}:</strong> Pays {{$job['salary']}} per year.
            </a>
        </li> 
        @endforeach
   </ul>



</x-layout>