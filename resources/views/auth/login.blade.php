<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to BINARY</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --blue-main: #5b8899;
            /* Base blue */
            --blue-light: #85aebe;
            /* Lighter blue */
            --blue-dark: #1e293b;
            /* Darker blue */
            --blue-darkest: #121b1e;
            /* Darkest blue */
            --text-light: #d8e3e8;
            /* Light text color */
        }

        /* Glow Effect for Heading */
        .glow-text {
            text-shadow: 0 0 15px rgba(94, 141, 158, 0.8), 0 0 25px rgba(94, 141, 158, 0.6);
        }

        /* Gradient Glow Buttons */
        .glow-btn {
            background: linear-gradient(90deg, var(--blue-main), var(--blue-light));
            color: white;
            box-shadow: 0 0 10px rgba(94, 141, 158, 0.6), 0 0 20px rgba(118, 179, 201, 0.4);
            transition: all 0.3s ease-in-out;
        }

        .glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(94, 141, 158, 0.8), 0 0 30px rgba(94, 141, 158, 0.6);
        }

        /* Glowy Background for Form */
        .card-glow {
            background: var(--blue-dark);
            box-shadow: 0 0 20px rgba(94, 141, 158, 0.6);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#49869d] to-[#1c2434] flex items-center justify-center">
    <!-- Main Container -->
    <div class="w-full max-w-sm mx-auto card-glow rounded-lg p-6">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.PNG') }}" alt="Logo" class="h-20 w-auto mx-auto">

        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="text-xl text-center font-bold mb-4 glow-text" style="color: #d8e3e8;">Log in to BINARY</h1>

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium" style="color: #64a6c0;">Email</label>
                <input id="email" type="email" name="email" required
                    class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-600 bg-[#1e293b] text-gray-200 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium" style="color: #64a6c0;">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-600 bg-[#1e293b] text-gray-200 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-600 bg-[#1e293b] text-blue-400 focus:ring-blue-400" name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-400">Remember me</label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-400 hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
                @endif

                <button type="submit"
                    class="glow-btn px-4 py-2 rounded-md text-white font-medium focus:outline-none">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>

</html>

