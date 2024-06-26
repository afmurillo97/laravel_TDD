<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-200">
        <!-- Intro Section -->
        <div class="max-w-full bg-white border-b border-gray-300 shadow-xl p-8 mb-8">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-4">TDD Repository Project</h1>
            
            <div class="flex flex-col lg:flex-row-reverse md:flex-row-reverse justify-between items-center mt-6 space-y-4 sm:space-y-0">
                <!-- Sign In Button Section -->
                <a href="{{ route('login') }}">
                    <div class="relative inline-flex items-center cursor-pointer justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 dark:bg-gray-700 dark:text-white dark:hover:text-gray-200 dark:shadow-none group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-5 h-5 text-green-400">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-5 h-5 text-green-400">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-200">
                            Sign In / Register
                        </span>
                    </div>
                </a>
                <!-- Key Features Section -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Key Features</h2>
                    <p class="text-lg text-gray-700 mb-4">This project includes various features to demonstrate advanced Laravel capabilities:</p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Elegant and intuitive UI built with Tailwind CSS.</li>
                        <li>Secure authentication and authorization using Laravel Jetstream.</li>
                        <li>Database migrations and seeders for easy setup and data population.</li>
                        <li>Automated tests for continuous integration and delivery.</li>
                        <li>Responsive design ensuring compatibility with all devices.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Repositories Section -->
        <div class="flex justify-center max-w-full p-4">
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-20">
                @foreach($repositories as $repository)
                <li class="flex flex-col items-center w-56 text-black p-4 bg-white rounded-lg shadow-xl hover:shadow-2xl">
                    <div class="flex relative">
                        <div class="rounded-xl overflow-hidden relative text-center p-4 group items-center flex flex-col max-w-sm transition-all duration-500">
                            <div class="w-22 h-22 rounded-full overflow-hidden mb-4">
                                <img src="{{ $repository->user->profile_photo_url }}" alt="Profile Image" class="w-full h-full object-cover">
                            </div>
                            <div class="group-hover:pb-10 transition-all duration-500 delay-200 text-center">
                                <h1 class="font-semibold text-gray-700">{{ $repository->user->name }}</h1>
                                <p class="text-gray-500 text-sm">{{ $repository->user->email }}</p>
                            </div>
                            <div class="flex items-center transition-all duration-500 delay-200 group-hover:bottom-3 -bottom-full absolute gap-2 justify-evenly w-full">
                                <div title="{{ $repository->url }}" class="flex gap-3 text-2xl bg-gray-700 text-white p-1 hover:p-2 transition-all duration-500 delay-200 rounded-full shadow-sm">
                                    <a class="hover:scale-110 transition-all duration-500 delay-200 cursor-pointer">
                                        <svg width="1em" height="1em" fill="currentColor" viewBox="0 0 1024 1024">
                                            <path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0138.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </body>

</html>
