<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.js"></script>
</head>

<body class="min-h-screen bg-gray-100 text-gray-800">
    <!-- Navigation Bar -->
    <nav class="bg-blue-500 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-center space-x-6">
            <a wire:navigate href="/counter" @class([
                'current font-bold text-blue-800 bg-white px-4 py-2 rounded-lg' => request()->is(
                    '/counter'),
                'px-4 py-2 rounded-lg hover:bg-blue-600',
            ])>
                Counter
            </a>
            <a wire:navigate href="/todos" @class([
                'current font-bold text-blue-800 bg-white px-4 py-2 rounded-lg' => request()->is(
                    '/todos'),
                'px-4 py-2 rounded-lg hover:bg-blue-600',
            ])>
                Todo
            </a>
            <a wire:navigate href="{{ route('posts') }}" @class([
                'current font-bold text-blue-800 bg-white px-4 py-2 rounded-lg' => request()->is(
                    '/posts'),
                'px-4 py-2 rounded-lg hover:bg-blue-600',
            ])>
                Posts
            </a>
            <a wire:navigate href="/form" @class([
                'current font-bold text-blue-800 bg-white px-4 py-2 rounded-lg' => request()->is(
                    '/form'),
                'px-4 py-2 rounded-lg hover:bg-blue-600',
            ])>
                Add Post
            </a>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="container mx-auto p-6">
        {{ $slot }}
    </main>
</body>

</html>