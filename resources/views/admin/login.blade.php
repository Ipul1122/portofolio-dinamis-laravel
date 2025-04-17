<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">

    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .popover {
            @apply absolute right-0 top-0 translate-x-1/2 -translate-y-full bg-red-500 text-white text-xs px-3 py-1 rounded shadow-md z-10;
        }
    </style>
</head>
<body class="bg-yellow-50 flex items-center justify-center min-h-screen">

    <form action="{{ route('admin.login.submit') }}" method="POST"
        class="bg-white p-8 rounded-xl shadow-xl w-full max-w-sm relative animate-fade-in-up transition-all duration-500">
        @csrf

        <h2 class="text-3xl font-bold text-center text-yellow-500 mb-6">Admin Login </h2>

        @if(session('error'))
            <div class="popover mb-6 animate-bounce">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-4 relative">
            <label for="username" class="block text-gray-700 mb-1">Username</label>
            <input type="text" name="username" id="username" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
        </div>

        <div class="mb-6 relative">
            <label for="password" class="block text-gray-700 mb-1">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
        </div>

        <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600 hover:shadow-md transition-all duration-300">Login</button>
    </form>

</body>
</html>
