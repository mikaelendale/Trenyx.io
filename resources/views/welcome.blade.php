{{-- @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endif
</head>

<body>
    {{-- Banner upper --}}
    <div class="relative bg-gray-700">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="pr-16 sm:text-center sm:px-16">
                <p class="font-medium text-white">
                    <span class="md:hidden"> We announced a new product! </span>
                    <span class="hidden md:inline"> Big news! We're excited to announce a brand new product. </span>
                    <span class="block sm:ml-2 sm:inline-block">
                        <a href="#" class="text-white font-bold underline"> Learn more <span
                                aria-hidden="true">&rarr;</span></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    {{-- end upper baner  --}}
    {{-- navigation  --}}
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a class="block text-teal-600" href="#">
                        <span class="sr-only">Home</span>
                        <img class="h-10" src="{{asset('images/hash_logo.svg')}}">
                    </a>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-lg">
                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> About </a>
                            </li>

                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> Careers </a>
                            </li>

                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> History </a>
                            </li>

                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> Services </a>
                            </li>

                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> Projects </a>
                            </li>

                            <li>
                                <a class="text-gray-900 transition hover:text-gray-500/75" href="#"> Blog </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="lg:flex sm:gap-4">
                        <a class="rounded-md bg-gray-900 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                            href="#">
                            Login
                        </a>

                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-black-600"
                                href="#">
                                Register
                            </a>
                        </div>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- end navigation  --}}
</body>

</html>
