<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('content.create') }}" class="bg-indigo-200 text-indigo-600 font-bold rounded px-4 py-2">+ Add new language</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <table class="table-auto w-full">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Inventor</th>
                               <th>Year</th>
                               <th>Photo</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($content as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->inventor }}</td>
                                <td>{{ $item->year }}</td>
                                <td><img src="{{ asset($item->img) }}" alt="" class="h-12"></td>
                            </tr>
                        @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
