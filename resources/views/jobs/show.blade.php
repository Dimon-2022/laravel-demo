<x-layout heading="About us">
   <x-slot:heading>
    Job
   </x-slot:heading>
   
   <h2 class="font-bold text-lg">{{$job['title']}}</h2>
   <p>This job pays {{$job['salary']}} per year.</p>
   {{-- <a href="/jobs/create">Edit job</a> --}}

   @can('edit', $job)
      <p class="mt-6">
         <x-button href="/jobs/{{$job->id}}/edit">
            Edit job
         </x-button>
      </p>
   @endcan

</x-layout>