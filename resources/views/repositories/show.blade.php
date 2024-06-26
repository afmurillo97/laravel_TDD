<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repository
        </h2>
    </x-slot>

    <!-- Go Back to Repositories button -->
    <div class="pt-2 pl-2">
        <a href="{{ route('repositories.index') }}" class="block bg-white text-center w-48 rounded-2xl h-14 relative font-sans text-black text-xl font-semibold group">
            <div class="bg-green-400 rounded-xl h-12 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[184px] z-10 duration-500">
                <svg width="25px" height="25px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                    <path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                </svg>
            </div>
            <p class="translate-x-2 pt-3">Go Back</p>
        </a>
    </div>

    <!-- Repository Info Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="">
                    <div class="flex items-baseline gap-4 mb-6">
                        <label class="text-lg font-medium text-gray-700 mb-2">URL:</label>
                        <span>{{ $repository->url }}</span>
                    </div>
                    <div class="mb-6">
                        <label for="description" class="block text-lg font-medium text-gray-700 mb-2">Description:</label>
                        <p>{{ $repository->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
