<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester {{ $semesterData->number }} - Subjects</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --blue-main: #5b8899;
            --blue-light: #85aebe;
            --blue-dark: #1e293b;
            --text-light: #d8e3e8;
        }

        .box-glow {
            background: linear-gradient(135deg, #9bb8c3, #5b8899 80%);
            box-shadow: 0 0 20px rgba(94, 141, 158, 0.6);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            color: var(--text-light);
        }

        .box-glow:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(94, 141, 158, 0.8);
            color: white;
        }

        .glow-text {
            text-shadow: 0 0 15px rgba(94, 141, 158, 0.8), 0 0 25px rgba(94, 141, 158, 0.6);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#49869d] to-[#1c2434] text-white">
    <!-- Full Page Wrapper -->
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-[var(--blue-dark)] text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo and Label -->
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.PNG') }}" alt="Logo" class="h-10 mr-5">
                    <h1 class="text-xl font-bold glow-text" style="color: #d8e3e8">BINARY</h1>
                </div>
                <!-- Logout Button -->
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="text-sm bg-red-500 px-3 py-1 rounded hover:bg-red-600 transition">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto p-6">
            <!-- Semester Header -->
            <h1 class="text-3xl font-bold text-center glow-text mb-6">Semester {{ $semesterData->number }}</h1>

            <!-- Subjects List -->
            @if ($subjects->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" >
                    @foreach ($subjects as $index => $subject)
                        <a href="{{ route('subject', $subject->id) }}"
                            class="box-glow p-6 h-32 flex items-center justify-center text-center rounded-lg font-bold">
                            {{ $subject->name }}
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-gray-400 text-center mt-4">No subjects available for this semester.</p>
            @endif

            <!-- Back Button -->
            <div class="mt-6 text-center">
                <a href="{{ route('dashboard') }}" class="text-[var(--blue-main)] hover:underline">
                    Back to Semesters
                </a>
            </div>
        </main>

        <!-- Footer Spacer -->
        <footer class="p-4 bg-transparent"></footer>
    </div>
</body>

</html>
