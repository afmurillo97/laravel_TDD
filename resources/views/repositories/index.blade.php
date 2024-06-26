<x-app-layout>
    <!-- Title Section -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <!-- Table With User Repositories -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-right mb-4">
                <a href="{{ route('repositories.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white hover:bg-blue-600 transition duration-150 text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110">
                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5v14m-7-7h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    New Repository
                </a>
            </p>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="border-b py-2 px-4 text-center text-gray-600 font-semibold">ID</th>
                                <th class="border-b py-2 px-4 text-left text-gray-600 font-semibold">URL</th>
                                <th class="border-b py-2 px-4 text-left text-gray-600 font-semibold">Description</th>
                                <th class="border-b py-2 px-4 text-center text-gray-600 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($repositories as $repository)
                                <tr class="hover:bg-gray-100 transition duration-150">
                                    <td class="border-t px-4 py-2 text-gray-700 text-center">{{ $repository->id }}</td>
                                    <td class="border-t px-4 py-2 text-gray-700">
                                        <a href="{{ $repository->url }}" class="text-blue-600 hover:underline" target="_blank">{{ $repository->url }}</a>
                                    </td>
                                    <td class="border-t px-4 py-2 text-gray-700">
                                        <span class="">{{ $repository->description_snippet }}</span>
                                    </td>
                                    <td class="border-t px-4 py-2 flex items-center justify-end space-x-2">
                                        <a href="{{ route('repositories.show', $repository) }}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white hover:bg-green-600 transition duration-150 text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110">
                                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12C1 12 5 4 12 4s11 8 11 8-4 8-11 8S1 12 1 12z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                            View
                                        </a>
                                        <a href="{{ route('repositories.edit', $repository) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 transition ease-in-out delay-75 hover:bg-yellow-600 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110">
                                            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 20h9" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19.293 2 20l.707-5 14.793-14.793z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                            Edit
                                        </a>
                                        <form action="{{ route('repositories.destroy', $repository) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110">
                                                <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="border-t px-4 py-2 text-gray-500 text-center">There are no repositories created.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
