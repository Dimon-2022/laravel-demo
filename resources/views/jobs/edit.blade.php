<x-layout>
   <x-slot:heading>
    Edit Job: {{$job->title}}
   </x-slot:heading>
   <form method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input required id="title" type="text" value="{{$job->title}}" name="title" placeholder="Shift leader" class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                </div>
                @error('title')
                    <span class="text-red-500">
                        {{$message}}
                    </span>
                @enderror
            </div>
            </div>

            <div class="sm:col-span-4">
            <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input required id="salary" type="text" name="salary" value={{$job->salary}} placeholder="$50,000 per year" class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                </div>
                @error('salary')
                    <span class="text-red-500">
                        {{$message}}
                    </span>
                @enderror
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div>
            <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
        </div>
        <div class="flex items-center gap-x-6">            
            <x-button href="/jobs/{{$job->id}}">Cancel</x-button>
            <div>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </div>
</form>
<form id="delete-form" class="hidden" method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('DELETE')
</form>
</x-layout>