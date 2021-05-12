<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <button form="content"  class="bg-indigo-200 text-indigo-600 font-bold rounded px-4 py-2">Save</button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="content" action="{{ route('content.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-label for="name">Name</x-label>
                            <x-input type="text" name="name" id="name" />
                        </div>
                        <div>
                            <x-label for="author">Author</x-label>
                            <x-input type="text" name="author" id="author" />
                        </div>
                        <div>
                            <x-label for="year">Year</x-label>
                            <x-input type="text" name="year" id="year" />
                        </div>
                        <div>
                            <x-label for="img">Photo</x-label>
                            <x-input type="file" name="img" id="img" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
