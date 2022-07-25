<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <livewire:styles />
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-primary-color">
        @include('layouts.navigation')
        <!-- {{-- Page Heading @isset($header) <header class="bg-white shadow"> <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> {{ $header }} 
            </div>
        </header> @endisset --}} -->

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-base-color">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-10 w-auto fill-current text-white" />
                        </a>
                    </div>
                </div>

                <div>
                    <!--  -->
                </div>
            </div>
    </footer>

    <livewire:scripts />
</body>

</html>