<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject->name }} - Books</title>
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
            <!-- Subject Header -->
            <h1 class="text-3xl font-bold text-center glow-text mb-6">{{ $subject->name }}</h1>

            <!-- Books Section -->
            {{-- <h2 class="text-2xl font-semibold text-center glow-text mb-4">Books</h2> --}}

            <!-- Books List -->
            @if ($books->count())
                <div class="space-y-4">
                    @foreach ($books as $book)
                        <div class="box-glow flex justify-between items-center p-4 rounded-lg">
                            <div>
                                <h2 class="text-lg font-semibold truncate w-96" style="color: var(--blue-dark)">{{ $book->title }}</h2>
                                <div class="mt-2">
                                    <span class="px-3 py-1 bg-[var(--blue-main)] text-white rounded-full text-sm">
                                        {{ $book->subject ? $book->subject->name : 'No Subject Assigned' }}
                                    </span>
                                </div>
                            </div>
                            @if ($book->address)
                                <a href="{{ $book->address }}"
                                    class="text-white bg-[var(--blue-main)] px-4 py-2 rounded hover:bg-[var(--blue-light)] transition"
                                    target="_blank" rel="noopener noreferrer">
                                    Download Link
                                </a>
                            @else
                                <span class="text-red-500">No PDF available</span>
                            @endif
                        </div>
                    @endforeach

                </div>
            @else
                <p class="text-gray-500 text-center mt-4">No books available for this subject.</p>
            @endif

            <!-- Back Button -->
            <div class="mt-6 text-center">
                <a href="{{ route('semester', ['id' => $subject->semester->major_id, 'semester' => $subject->semester->number]) }}"
                    class="text-[var(--blue-main)] hover:underline">
                    Back to Subjects
                </a>
            </div>
        </main>

        <!-- Footer Spacer -->
        <footer class="p-4 bg-transparent"></footer>
    </div>
</body>

</html>
