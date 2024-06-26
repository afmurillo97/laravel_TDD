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
                <form action="{{ route('repositories.store') }}" method="POST" class="max-w-full">
                    @csrf

                    <div class="mb-6">
                        <label for="url" class="block text-lg font-medium text-gray-700 mb-2">URL *</label>
                        <input type="text" name="url" value="https://" class="form-input w-full rounded-md shadow-sm border border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter the repository URL">
                    </div>

                    <div class="mb-6">
                        <label for="description" class="block text-lg font-medium text-gray-700 mb-2">Description *</label>
                        <textarea name="description" class="form-input w-full rounded-md shadow-sm border border-gray-300 focus:ring focus:ring-blue-200 focus:border-blue-500" placeholder="Enter the repository description" rows="4"></textarea>
                    </div>

                    <hr class="my-6">

                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-500 text-white font-bold rounded-md transition ease-in-out delay-75 hover:bg-blue-600 hover:-translate-y-1 hover:scale-105">
                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14m-7-7h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
