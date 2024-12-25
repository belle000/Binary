<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BINARY</title>
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

        /* Background Gradient */
        body {
            background: radial-gradient(circle at center, #49869d 3%, #1c2434 90%);
            color: var(--text-light);
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

        /* Glowy Background for Logo */
        .logo-glow {
            background: linear-gradient(90deg, var(--blue-dark), var(--blue-darkest));
            box-shadow: 0 0 40px rgba(94, 141, 158, 0.5), 0 0 80px rgba(94, 141, 158, 0.3);
        }

        .logo-circle {
            background: linear-gradient(90deg, #5e8d9e, #182428);
            box-shadow: 0 0 20px 5px rgba(94, 141, 158, 0.5);
        }
    </style>
</head>

<body class="min-h-screen sans-serif">
    <!-- Main Container -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Card Container -->
        <div class="bg-[var(--blue-dark)] shadow-lg rounded-lg flex flex-col md:flex-row max-w-4xl w-full">
            <!-- Left Section: Welcome Box -->
            <div class="p-8 md:w-1/2 flex flex-col justify-center">
                <h1 class="text-4xl font-bold glow-text mb-4">Welcome to BINARY!</h1>
                <p style="color: #64a6c0;"class="mb-2">Please login or register to access the library.</p>
                <p class="text-sm text-gray-400 mb-10">Where knowledge meets technology, bringing BINUS students closer
                    to endless possibilities.</p>
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="glow-btn px-6 py-2 rounded-full text-lg font-medium">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="glow-btn px-6 py-2 rounded-full text-lg font-medium">
                        Register
                    </a>
                </div>
            </div>

            <!-- Right Section: Image -->
            <div class="md:w-1/2 flex items-center justify-center bg-transparent">
                <div class="p-6">
                    <div
                        class="bg-gradient-to-r from-[var(--blue-main)] via-[var(--blue-light)] to-[var(--blue-main)] rounded-full p-4 shadow-lg">
                        <img src="{{ asset('images/logo.PNG') }}" alt="Library Logo" class="w-2/3 max-w-xs md:max-w-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
