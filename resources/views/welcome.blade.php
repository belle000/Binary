<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BINARY</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <!-- Container -->
        <div class="bg-white shadow-lg rounded-lg flex flex-col md:flex-row max-w-4xl w-full">
            <!-- Left Section: Welcome Box -->
            <div class="p-8 md:w-1/2 flex flex-col justify-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to BINARY!</h1>
                <p class="text-gray-600 mb-2">Please login or register to access the library.</p>
                <p class="text-sm text-gray-500 mb-6">Where knowledge meets technology, bringing BINUS students closer
                    to endless possibilities.</p>
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Register</a>
                </div>
            </div>

            <!-- Right Section: Images -->
            <div class="md:w-1/2 flex items-center justify-center bg-blue-50">
                <img src="{{ asset('images/logo.PNG') }}" alt="Library Logo" class="w-2/3 max-w-xs md:max-w-sm">
            </div>
        </div>
    </div>
</body>

</html>
