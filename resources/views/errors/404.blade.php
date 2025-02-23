<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trenyx.io </title>
    {{-- logo --}}
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
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
<section class="min-h-screen grid place-items-center">
  <div class="container mx-auto text-center">
    <div class="mb-8">
      <!-- Logo: Centered and scaled -->
      <img src="{{asset('images/logo.png')}}" class="mx-auto mb-6 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg" width="90" alt="Logo">
    </div>
    <h2 class="font-sans antialiased font-bold text-2xl md:text-3xl lg:text-4xl text-current mt-8 mb-6">Error 404 </h2>
    <p class="font-sans antialiased text-base md:text-lg mb-12 text-slate-600 max-w-xl [text-wrap:_balance] mx-auto">Don&#x27;t worry, our team is already on it. Please try refreshing the page or come back later.</p>
    <a href="/" class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed data-[shape=pill]:rounded-full data-[width=full]:w-full focus:shadow-none text-sm rounded-md py-2 px-4 shadow-sm hover:shadow-md bg-slate-800 border-slate-800 text-slate-50 hover:bg-slate-700 hover:border-slate-700" data-shape="default" data-width="default">Back to Home</a>
  </div>
</section>

</body>

</html>