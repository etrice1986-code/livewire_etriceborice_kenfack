<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'MyApp' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire --}}
    <livewire:styles />
</head>

<body class="bg-light">
<x-navbar/>
    
    <main class="container">
        {{ $slot }}
    </main>

    {{-- Livewire --}}
    <livewire:scripts />
</body>
</html>
