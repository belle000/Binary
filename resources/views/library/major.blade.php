<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $major->name }} - Semesters</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">{{ $major->name }}</h1>
            <a
                href="#"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-sm bg-red-500 px-3 py-1 rounded hover:bg-red-600 transition"
            >
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <!-- Search Bar -->
        <div class="mb-6">
            <form action="{{ route('library.search') }}" method="GET" class="flex">
                <input
                    type="text"
                    name="query"
                    placeholder="Search for books..."
                    class="w-full p-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
                <button
                    type="submit"
                    class="p-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 transition"
                >
                    Search
                </button>
            </form>
        </div>

        <!-- Semesters List -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Semesters</h2>
        <ul class="space-y-3">
            @foreach ($semesters as $semester)
                <li>
                    <a
                        href="{{ route('semester', ['id' => $major->id, 'semester' => $semester->number]) }}"
                        class="block p-4 bg-white shadow-md rounded-md hover:bg-blue-50 transition"
                    >
                        Semester {{ $semester->number }}
                    </a>
                </li>
            @endforeach
        </ul>

    </main>
</body>
</html>
