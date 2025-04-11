<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind (desde CDN para uso rápido) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

    @if (Route::has('login'))
        <div class="fixed top-4 right-6 z-10">
            @auth
                <a href="{{ url('/home') }}" class="text-sm font-semibold text-blue-600 hover:underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-blue-600 hover:underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm font-semibold text-green-600 hover:underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex flex-col justify-center items-center text-center px-4">
        <div class="mb-6">
            <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-20 w-auto text-gray-700 dark:text-gray-200">
                <!-- Aquí tu SVG -->
            </svg>
        </div>

        <h1 class="text-5xl sm:text-6xl font-extrabold mb-4">Bienvenido</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">Esta es tu plataforma Laravel lista para personalizar</p>

        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow transition">Iniciar sesión</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg shadow transition">Registrarse</a>
            @endif
        </div>
    </div>

</body>
</html>
