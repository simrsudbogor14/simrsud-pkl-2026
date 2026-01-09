<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">

        <h2 class="text-2xl font-bold text-center mb-6">
            Login
        </h2>

        @if(session('error'))
            <p class="text-red-500 text-sm text-center mb-4">
                {{ session('error') }}
            </p>
        @endif

        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <input
                type="text"
                name="username"
                placeholder="Username"
                required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                Login
            </button>
        </form>

    </div>
</div>

</body>
</html>
