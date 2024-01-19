<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
    <meta name="description" content="{{ $description ?? 'Default meta description' }}">
    <title> lanro - {{ $title ?? '' }} </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body::-webkit-scrollbar {
            width: 4px;
            /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-thumb {
            background-color: #24262c;
            /* color of the scroll thumb */
            border-radius: 10px;
            /* roundness of the scroll thumb */
        }

        :is(.dark .dark\:oscuro) {
            --tw-text-opacity: 1;
            background-image: url(" {{ asset('assets/images/fondo/dark.png') }}");
            background-repeat: no-repeat;
            background-size: 150%;
        }

        .light {
            background-image: url("{{ asset('assets/images/fondo/light.png') }}");
            background-repeat: no-repeat;
            background-size: 150%;
        }
    </style>
</head>

{{-- Color de fondo: bg-gradient-to-r from-rose-100 to-teal-100 dark:bg-gradient-to-r dark:from-slate-900 dark:via-purple-900 dark:to-slate-900 --}}

<body class="bg-slate-100 dark:bg-slate-900 dark:oscuro light selection:bg-violet-500 selection:text-white">
    <x-layouts.nav />

    @if (session('status'))
        <div class="flex fixed bottom-10 ml-80 items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('status') }}</span>
            </div>
        </div>
    @endif

    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="{{ asset('assets/js/dark_mode.js') }}"></script>
</body>

</html>
