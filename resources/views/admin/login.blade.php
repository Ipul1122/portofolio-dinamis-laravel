<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-50 flex items-center justify-center h-screen">

    <form action="{{ route('admin.login.submit') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        @csrf
        <h2 class="text-2xl font-bold text-center text-yellow-500 mb-6">Admin Login</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-4">
            <label for="username" class="block text-gray-700 mb-1">Username</label>
            <input type="text" name="username" id="username" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700 mb-1">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600 transition">Login</button>
    </form>

</body>
</html>
