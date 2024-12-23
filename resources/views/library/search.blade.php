<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Container -->
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Search Results</h1>

        <!-- Search Bar -->
        <div class="mb-6">
            <form action="{{ route('library.search') }}" method="GET" class="flex">
                <input type="text" name="query" placeholder="Search for books..." value="{{ request('query') }}"
                    class="w-full p-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <button type="submit" class="p-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600 transition">
                    Search
                </button>
            </form>
        </div>

        <!-- Results Section -->
        @if (isset($books) && $books->count())
            <p class="text-gray-600 mb-4">
                Showing {{ $books->count() }} result(s) for "<strong>{{ request('query') }}</strong>":
            </p>

            <ul id="book-list" class="divide-y divide-gray-200">
                @foreach ($books as $book)
                    <li class="py-4">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $book->title }}</h2>
                        <p class="text-gray-600 text-sm mb-2">
                            {{ $book->subject ? $book->subject->name : 'No Subject Assigned' }}
                        </p>
                        @if ($book->address)
                            <a href="{{ $book->address }}"
                                class="text-white bg-blue-500 px-4 py-2 rounded hover:bg-blue-600 transition"
                                target="_blank"
                                rel="noopener noreferrer"
                                >
                                Download Link
                            </a>
                        @else
                            <span class="text-red-500">No PDF available</span>
                        @endif

                        <!-- Hidden data for JavaScript -->
                        <span class="book-data hidden"
                              data-title="{{ $book->title }}"
                              data-subject="{{ $book->subject ? $book->subject->name : 'No Subject Assigned' }}"
                              data-address="{{ $book->address ?? 'No Address Available' }}">
                        </span>
                    </li>
                @endforeach
            </ul>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $books->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-gray-500 text-center mt-6">
                No results found for "<strong>{{ request('query') }}</strong>".
            </p>
        @endif

        <!-- Back to Semesters -->
        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">
                Back to Semesters
            </a>
        </div>
    </div>

    <!-- JavaScript for Console Logging -->
    <script>
        // Select all book data elements
        const books = document.querySelectorAll('.book-data');

        // Loop through each book and log the details
        books.forEach(book => {
            const title = book.getAttribute('data-title');
            const subject = book.getAttribute('data-subject');
            const address = book.getAttribute('data-address');
            console.log(`Book: ${title}, Subject: ${subject}, Address: ${address}`);
        });
    </script>
</body>

</html>
