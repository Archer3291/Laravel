<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $description ?? 'Default meta description' }}">
    <title> lanro - {{ $title ?? '' }} </title>
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <x-layouts.nav />
    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
